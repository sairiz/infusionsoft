<?php

class FuseTest extends TestCase {

	public function testMandrillIInstance()
	{
		$this->assertContainsOnlyInstancesOf('iSDK', array(App::make('infusionsoft')) );
	}

	public function testInfusionsoftConnectionViaFacadesFuse()
	{
		$data = Fuse::appEcho('test');

	  	$this->assertEquals('ERROR: -1 - No method matching arguments: java.lang.String, java.lang.String', $data);
	}
}