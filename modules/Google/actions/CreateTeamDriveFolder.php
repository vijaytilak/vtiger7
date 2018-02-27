<?php
/**
 * Created by PhpStorm.
 * User: Vijay
 * Date: 16/02/2018
 * Time: 2:25 PM
 */
require_once 'include/database/PearDatabase.php';
require_once 'libraries/google-api-php-client/src/Google/Client.php';
require_once 'libraries/google-api-php-client/src/Google/Service/Drive.php';

class Google_CreateTeamDriveFolder_Action extends Vtiger_BasicAjax_Action {

	function process(Vtiger_Request $request) {

		$request->set('sourcemodule', 'Drive');
		$sourceModule = $request->get('sourcemodule');
		$oauth2 = new Google_Oauth2_Connector($sourceModule);
		if ($oauth2->hasStoredToken()) {
			$oauth2->authorize();
			exit("<br> there is a stored token");
		} else {
			if($request->get('code')) {
				$authCode = $_REQUEST['code'];
				$token = $oauth2->exchangeCodeForToken($authCode);
				$oauth2->storeToken($token);
				$oauth2->authorize();

				//Build Service
				$client = new Google_Client();
				$client->setClientId($oauth2->getClientId());
				$client->setClientSecret($oauth2->getClientSecret());
				$client->setRedirectUri($oauth2->getRedirectUri());
				$client->setScopes($oauth2->getScope());
				$client->setAccessToken($oauth2->getAccessToken());

				if ($client->getAccessToken()) {
					ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
					$service = new Google_Service_Drive($client);
					$parent = "0ACuhCJyBlm01Uk9PVA"; //Teamdrive ID

					//Create new folder
					$file = new Google_Service_Drive_DriveFile(array(
						'name' => 'Test Folder',
						'mimeType' => 'application/vnd.google-apps.folder',
						'teamDriveId' => $parent,
						'parents' => array($parent)
					));

					$optParams = array(
						'fields' => 'id',
						'supportsTeamDrives' => true,
					);

					$createdFile = $service->files->insert($file, $optParams);
					print "Created Folder: ".$createdFile->id;
				} else {
					exit('Cant get token in CreateTeamDriveFolder.php');
				}
			} else {
				$oauth2->authorize();
			}
		}

	}

	function saveSettings($request) {
		$sourceModule = $request->get('sourcemodule');
		$fieldMapping = $request->get('fieldmapping');

		Google_Utils_Helper::saveSettings($request);
		if ($fieldMapping) {
			Google_Utils_Helper::saveFieldMappings($sourceModule, $fieldMapping);
		}
		$response = new Vtiger_Response;
		$result = array('settingssaved' => true);
		$response->setResult($result);
		$response->emit();
	}

}
