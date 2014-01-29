<?php namespace Saiffil\Infusionsoft;

use Config;
use iSDK;

class Infusionsoft {

	/**
	 * Instantiates the SDK class
	 *
	 * @return iSDK object
	 */
	public function isdk()
	{
		$app = new iSDK;
		return $app->cfgCon(Config::get('infusionsoft::appName'), Config::get('infusionsoft::apiKey'));
	}
}