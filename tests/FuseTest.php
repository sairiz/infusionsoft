<?php

class FuseTest extends TestCase {

	public function testInfusionsoftConnection()
	{
		$data = Fuse::appEcho('test');

	  	$this->assertEquals('ERROR: -1 - No method matching arguments: java.lang.String, java.lang.String', $data);
	}
}