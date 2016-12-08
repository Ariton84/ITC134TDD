<?php
//calculator_test2.php
require_once 'simpletest/autorun.php';
include 'temperatureclass.php';

class TestOfTemperature extends UnitTestCase {

	function testCelsiusToKelvin() {
	  $myTemp= new Temperature();
	  $this->assertEqual($myTemp->c2k(100), 373.15, "100 Celsius is 373.15 Kelvin");
	  $this->assertEqual($myTemp->c2k(0), 273.15, "0 Celsius is 273.15 Kelvin");
	  $this->assertPattern('/error/i', $myTemp->c2k(-274), "-274 Celsius should generate error message");	
	}
	function testCelsiusToFahrenheit() {
	  $myTemp= new Temperature();
	  $this->assertEqual($myTemp->c2f(100), 212, "100 Celsius is 212 Fahrenheit");
	  $this->assertEqual($myTemp->c2f(0), 32, "0 Celsius is 32 Fahrenheit");
	  $this->assertPattern('/error/i', $myTemp->c2f(-274), "-274 Celsius should generate error message");	
	}
    
	function testFahrenheitToKelvin() {
	  $myTemp= new Temperature();
	  $this->assertEqual($myTemp->f2k(212), 373.15, "212 Fahrenheit is 373.15 Kelvin");
	  $this->assertEqual($myTemp->f2k(32), 273.15, "32 Fahrenheit is 273.15 Kelvin");
	  $this->assertPattern('/error/i', $myTemp->f2k(-700), "-700 Fahrenheit should generate error message");	
	}
	function testFahrenheitToCelsius() {
	  $myTemp= new Temperature();
	  $this->assertEqual($myTemp->f2c(212), 100, "212 Fahrenheit is 100 Celsius");
	  $this->assertEqual($myTemp->f2c(32), 0, "32 Fahrenheit is 0 Celsius");
	  $this->assertPattern('/error/i', $myTemp->f2c(-700), "-700 Fahrenheit should generate error message");	
	}
    
	function testKelvinToCelsius() {
	  $myTemp= new Temperature();
	  $this->assertEqual($myTemp->k2c(100), -173.15, "100 Kelvin is -173.15 Celsius");
	  $this->assertEqual($myTemp->k2c(10), -263.15, "10 Kelvin is -263.15 Celsius");
	  $this->assertPattern('/error/i', $myTemp->k2c(-10), "-10 Kelvin to Celsius should generate error message");	
	}  
      
	function testKelvinToFahrenheit() {
	  $myTemp= new Temperature();
	  $this->assertEqual($myTemp->k2f(255), -0.67, "255 Kelvin is -0.67 Fahrenheit");
	  $this->assertEqual($myTemp->k2f(0), -459.67, "0 Kelvin is -459.67 Fahrenheit");
	  $this->assertPattern('/error/i', $myTemp->k2f(-10), "-10 Kelvin to Fahrenheit should generate error message");	
	}
	
}