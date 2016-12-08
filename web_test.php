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
		
		$this->setField("degree", -1);
		$this->setField("scale", kelvin);

		$this->clickSubmit("Submit");

		$this->assertResponse(200);
		$this->assertNoText("-1", '-1 kelvin does not exist, the lowest temperature possible is absolute zero: 0 kelvin');
		$this->assertNoText("-461.2");
		$this->assertNoText("-274");
	}

}
