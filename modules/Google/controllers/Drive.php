<?php
/**
 * Created by PhpStorm.
 * User: Vijay
 * Date: 16/02/2018
 * Time: 2:46 PM
 */
require_once 'include/database/PearDatabase.php';
require_once 'libraries/google-api-php-client/src/Google/Client.php';
require_once 'libraries/google-api-php-client/src/Google/Service/Drive.php';

class Google_Drive_Controller {

	public $user;
	public $oauth2connection;
	public $service;
	public $createdFileID;
	public $ParentFolderId;
	protected $db;


	function __construct($user) {
		$this->db = PearDatabase::getInstance();
		$this->user = $user;
		//$this->getParentFolderIDFrmDB();
		$this->authorizeGoogleDrive();
	}

	/**
	 * Returns the connector of the google drive
	 * @return Google_Drive_Connector
	 */
	public function authorizeGoogleDrive() {
		$sourceModule = 'Drive';
		$oauth2Connector = new Google_Oauth2_Connector($sourceModule);
		$this->oauth2Connection = $oauth2Connector->authorize();
		echo '<tt><pre>' . var_export($this->oauth2Connection, TRUE) . '</pre></tt>';
		$this->buildService();
	}


	public function getParentFolderIDFrmDB() {
		$sql = 'SELECT gdparentfolderid FROM vtiger_users WHERE id = ?';
		$params = array($this->user->id);
		$res = $this->db->pquery($sql,$params);
		$this->ParentFolderId=$this->db->query_result($res, 0, 'gdparentfolderid');
		if($this->ParentFolderId)
			return 1;
		else
			exit('Google Drive Parent Folder ID missing in User Configuration!');
	}


	/**
	 * Build a Drive service object.
	 *
	 * @param String credentials Json representation of the OAuth 2.0
	 *     credentials.
	 * @return Google_Service_Drive service object.
	 */
	public function buildService() {

		$client = new Google_Client();
		// Get your credentials from the console
		$client->setClientId($this->oauth2Connection->getClientId());
		$client->setClientSecret($this->oauth2Connection->getClientSecret());
		$client->setRedirectUri($this->oauth2Connection->getRedirectUri());
		$client->setScopes($this->oauth2Connection->getScope());
		$client->setAccessToken($this->oauth2Connection->getAccessToken());


		if ($client->getAccessToken()) {
			$this->service = new Google_Service_Drive($client);
		}

	}

	/**
	 * Fire Request to Create GD Folder
	 *
	 * @return type
	 */
	public function sendRequestCreateGDFolder($PotentialNo,$CustomerFirstName,$CustomerLastName) {

		$StrippedPotentialNo = str_replace("POT","",$PotentialNo);

		$file = new Google_Service_Drive_DriveFile();
		$file->setTitle('Q_'.$StrippedPotentialNo.'_'.$CustomerFirstName.' '.$CustomerLastName);
		$file->setDescription('Fresco Vtiger Folder');
		// To create new folder
		$file->setMimeType('application/vnd.google-apps.folder');

		// To set parent folder
		$parent = new Google_Service_Drive_ParentReference();
		$parent->setId($this->ParentFolderId);
		$file->setParents(array($parent));

		// Call the API with the media upload, defer so it doesn't immediately return.
		$createdFile = $this->service->files->insert($file, array(
			'mimeType' => 'application/vnd.google-apps.folder',
			'uploadType' => 'multipart'
		));

		//$this->setFilePermission($createdFile->id, 'richard@frescoshades.co.nz', 'user', 'owner');

		//Here you will get the new created folder's id
		//echo "<br>New Folder Created Successfully: ID=".$createdFile->id;

		return($createdFile);
	}

	/**
	 * Insert a new permission.
	 *
	 * @param Google_Service_Drive $service Drive API service instance.
	 * @param String $fileId ID of the file to insert permission for.
	 * @param String $value User or group e-mail address, domain name or NULL for "default" type.
	 * @param String $type The value "user", "group", "domain" or "default".
	 * @param String $role The value "owner", "writer" or "reader".
	 * @return Google_Servie_Drive_Permission The inserted permission. NULL is
	 *     returned if an API error occurred.
	 */
	public function setFilePermission($fileId, $value, $type, $role) {
		$newPermission = new Google_Service_Drive_Permission();
		$newPermission->setValue($value);
		$newPermission->setType($type);
		$newPermission->setRole($role);
		try {
			return $this->service->permissions->insert($fileId, $newPermission);
		} catch (Exception $e) {
			print "An error occurred: " . $e->getMessage();
		}
		return NULL;
	}

	/**
	 * Print files belonging to a folder.
	 *
	 * @param Google_Service_Drive $service Drive API service instance.
	 * @param String $folderId ID of the folder to print files from.
	 */
	public function printFilesInFolder() {
		$pageToken = NULL;

		do {
			try {
				$parameters = array();
				$parameters['q'] = "trashed=false and mimeType = 'application/vnd.google-apps.folder'";
				if ($pageToken) {
					$parameters['pageToken'] = $pageToken;
				}
				$children = $this->service->children->listChildren($this->ParentFolderId, $parameters);

				foreach ($children->getItems() as $child) {
					echo 'File Id: ' . $child->getId() . '<br>';
					$this->printFile($child->getId());
				}
				$pageToken = $children->getNextPageToken();
			} catch (Exception $e) {
				print "An error occurred: " . $e->getMessage();
				$pageToken = NULL;
			}
		} while ($pageToken);
	}

	/**
	 * Print a file's metadata.
	 *
	 * @param apiDriveService $service Drive API service instance.
	 * @param string $fileId ID of the file to print metadata for.
	 */
	public function printFile($fileId) {
		try {
			$file = $this->service->files->get($fileId);

			echo "<br>Title: " . $file->getTitle();
			echo "<br>Description: " . $file->getDescription();
			echo "<br>MIME type: " . $file->getMimeType();
			echo "<br><br>";
		} catch (Exception $e) {
			echo "<br>An error occurred: " . $e->getMessage();
		}
	}
	/**
	 * Search Folder By ID.
	 *
	 * @param apiDriveService $service Drive API service instance.
	 * @param string $fileId ID of the file to print metadata for.
	 */
	public function searchFolderByID($fileId) {
		try {
			$file = $this->service->files->get($fileId);
			if($file->getTitle()) {
				return(1);
			}

		} catch (Exception $e) {
			echo "<br>An error occurred: " . $e->getMessage();
			return(0);
		}
	}

	/**
	 * Search for file by title and retrieve a list of File resources.
	 *
	 * @param string $title
	 * @return Array List of Google_DriveFile resources.
	 */
	public function searchFile($title='')
	{
		if (!$this->service) {
			$this->buildService();
		}
		$query = "title contains '" . $title . "'";
		$query .= " and '".$this->ParentFolderId."' in parents";
		$query .= " and trashed=false and mimeType = 'application/vnd.google-apps.folder'";
		$result = array();
		$pageToken = null;
		do {
			try {
				$parameters = array();
				if ($pageToken) {
					$parameters['pageToken'] = $pageToken;
				}
				if ($query) {
					$parameters['q'] = $query;
				}
				$files = $this->service->files->listFiles($parameters);
				$result = array_merge($result, $files->getItems());
				$pageToken = $files->getNextPageToken();
			} catch (Exception $e) {
				print "An error occurred: " . $e->getMessage();
				$pageToken = null;
			}
		} while ($pageToken);

		foreach ($result as $GDFile) {
			$FileMetaData = $this->getMetadata($GDFile);
			//echo '<tt><pre>' . var_export($FileMetaData, TRUE) . '</pre></tt>';
		}

		return $result;
	}

	/**
	 * Returns meta data by file id
	 *
	 * @param Google_Service_Drive_DriveFile file object to print metadata for.
	 * @return array of meta data
	 */
	public function getMetadata(Google_Service_Drive_DriveFile $file)
	{
		try {
			return array('title' => $file->getTitle(),
			             'description' => $file->getDescription(),
			             'mime_type' => $file->getMimeType()
			);
		} catch (Exception $e) {
			print "An error occurred: " . $e->getMessage();
		}
	}


	/**
	 * Retrieve a list of File resources.
	 *
	 * @param Google_Service_Drive $service Drive API service instance.
	 * @return Array List of Google_Service_Drive_DriveFile resources.
	 */
	public function retrieveAllFiles() {
		$result = array();
		$pageToken = NULL;

		do {
			try {
				$parameters = array();
				$parameters['q'] = $this->ParentFolderId." in parents";
				if ($pageToken) {
					$parameters['pageToken'] = $pageToken;
				}
				$files = $this->service->files->listFiles($parameters);

				$result = array_merge($result, $files->getItems());
				$pageToken = $files->getNextPageToken();
			} catch (Exception $e) {
				print "An error occurred: " . $e->getMessage();
				$pageToken = NULL;
			}
		} while ($pageToken);
		return $result;
	}
}
