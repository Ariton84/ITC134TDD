<?php
//temperature_test2.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class ConvertFormTests extends WebTestCase {

	  function testTemperatureSubmit() {
		$this->get(VIRTUAL_PATH . '/convert.php');
		$this->assertResponse(200);

		$this->setField("degree", 5);
		$this->setField("scale", celcius);

		$this->clickSubmit("Submit");

		$this->assertResponse(200);
		$this->assertText("5");
		$this->assertText("41");
		$this->assertText("278");
	}

}