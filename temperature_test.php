<?php
//calculator_test2.php
require_once 'simpletest/autorun.php';
include_once 'convert.php';

class TestTemperature extends PHPUnit_Framework_TestCase {
    public function __call($command, $arguments) {
        $class_methods = get_class_methods(__CLASS__);
        if(!in_array($command, $class_methods)) {
            throw new BadMethodCallException(
                  "Method $command not defined."
                );
        }
    }
	function testCelsiusToKelvin() {
	  $myTemp= new Temperature();
	  $this->assertEquals($myTemp->c2k(100), 373, "100 Celsius is 373 Kelvin");
	  $this->assertEquals($myTemp->c2k(0), 273, "0 Celsius is 373 Kelvin");
	  $this->assertPattern('/error/i', $myTemp->c2k(-274), "-274 Celsius should generate error message");	
	}
	function testCelsiusToFahrenheit() {
	  $myTemp= new Temperature();
	  $this->assertEquals($myTemp->c2f(100), 212, "100 Celsius is 212 Fahrenheit");
	  $this->assertEquals($myTemp->c2f(0), 32, "0 Celsius is 32 Fahrenheit");
	  $this->assertPattern('/error/i', $myTemp->c2f(-274), "-274 Celsius should generate error message");	
	}
    
	function testFahrenheitToKelvin() {
	  $myTemp= new Temperature();
	  $this->assertEquals($myTemp->f2k(212), 373, "212 Fahrenheit is 373 Kelvin");
	  $this->assertEquals($myTemp->f2k(32), 273, "32 Fahrenheit is 273 Kelvin");
	  $this->assertPattern('/error/i', $myTemp->f2k(-700), "-700 Fahrenheit should generate error message");	
	}
	function testFahrenheitToCelsius() {
	  $myTemp= new Temperature();
	  $this->assertEquals($myTemp->f2c(212), 100, "212 Fahrenheit is 100 Celsius");
	  $this->assertEquals($myTemp->f2c(32), 0, "32 Fahrenheit is 0 Celsius");
	  $this->assertPattern('/error/i', $myTemp->f2c(-700), "-700 Fahrenheit should generate error message");	
	}
    
	function testKelvinToCelsius() {
	  $myTemp= new Temperature();
	  $this->assertEquals($myTemp->k2c(100), -173, "100 Kelvin is =173 Celsius");
	  $this->assertEquals($myTemp->k2c(10), -263, "10 Kelvin is -263 Celsius");
	  $this->assertPattern('/error/i', $myTemp->k2c(-10), "-10 Kelvin to Celsius should generate error message");	
      //$this->expectException($myTemp->k2c(), -263, "No parameter should throw exception");
	}  
      
	function testKelvinToFahrenheit() {
	  $myTemp= new Temperature();
	  $this->assertEquals($myTemp->k2f(255), 0, "255 Kelvin is 0 Fahrenheit");
	  $this->assertEquals($myTemp->k2f(0), -459, "0 Kelvin is -459 Fahrenheit");
	  $this->assertPattern('/error/i', $myTemp->k2f(-10), "-10 Kelvin to Fahrenheit should generate error message");	
	}
	
}
