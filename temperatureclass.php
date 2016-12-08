
<?php

class Temperature
     {
        function f2c($degree)
	{
		return ($degree -32)*5/9;
        }
    	function c2f($degree)
	{
	     	return $degree*9/5+32;
        }        
        function f2k($degree) 
	{             
	        return 5/9*($degree - 32) + 273.15;
        }
        function c2k($degree) 
	{
                return $degree + 273.15;
        }
        function k2c($degree) 
	{
                return $degree - 273.15;
        }
        function k2f($degree) {
                return 9/5*($degree - 273.15) + 32;
        }
     }
?>
