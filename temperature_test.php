<?php
//calculator_test2.php
require_once 'simpletest/autorun.php';
include 'temperatureclass.php';

class TestOfTemperature extends UnitTestCase {

	function testCelsiusToKelvin() {
	  $myTemp= new Temperature();
	  $this->assertEqual($myTemp->c2k(100), 373, "100 Celsius is 373 Kelvin");
	  $this->assertEqual($myTemp->c2k(0), 273, "0 Celsius is 373 Kelvin");
	}
	function testCelsiusToFahrenheit() {
	  $myTemp= new Temperature();
	  $this->assertEqual($myTemp->c2f(100), 212, "100 Celsius is 212 Fahrenheit");
	  $this->assertEqual($myTemp->c2f(0), 32, "0 Celsius is 32 Fahrenheit");
	}
    
	function testFahrenheitToKelvin() {
	  $myTemp= new Temperature();
	  $this->assertEqual($myTemp->f2k(212), 373, "212 Fahrenheit is 373 Kelvin");
	  $this->assertEqual($myTemp->f2k(32), 273, "32 Fahrenheit is 273 Kelvin");
	}
	function testFahrenheitToCelsius() {
	  $myTemp= new Temperature();
	  $this->assertEqual($myTemp->f2c(212), 100, "212 Fahrenheit is 100 Celsius");
	  $this->assertEqual($myTemp->f2c(32), 0, "32 Fahrenheit is 0 Celsius");
	}
    
	function testKelvinToCelsius() {
	  $myTemp= new Temperature();
	  $this->assertEqual($myTemp->k2c(100), -173, "100 Kelvin is =173 Celsius");
	  $this->assertEqual($myTemp->k2c(0), -273, "0 Kelvin is -273 Celsius");
	  echo($myTemp->k2c(0));
	}
	function testKelvinToFahrenheit() {
	  $myTemp= new Temperature();
	  $this->assertEqual($myTemp->k2f(255), 0, "255 Kelvin is 0 Fahrenheit");
	  $this->assertEqual($myTemp->k2f(0), -459, "0 Kelvin is -459 Fahrenheit");
	}
	
}