<?php namespace Saiffil\Infusionsoft;

use Config;
use iSDK;

require_once(__DIR__.'/isdk.php');

class Infusionsoft {

	/**
	 * Instantiates the SDK class
	 *
	 * @return iSDK object
	 */
	public function isdk()
	{
		$appName =  Config::get('infusionsoft::appName');
		$apiKey =  Config::get('infusionsoft::apiKey');

		$app = new iSDK;
		$app->cfgCon($appName, $apiKey);

		return $app;
	}
}