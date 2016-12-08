<?php
class Temperature
     {
        function f2c($degree)
	{
		return number_format((float)($degree -32)*5/9, 2, '.', '');
        }
    	function c2f($degree)
	{
	     	return number_format((float)$degree*9/5+32, 2, '.', '');
        }        
        function f2k($degree) 
	{             
	        return number_format((float)5/9*($degree - 32) + 273.15, 2, '.', '');
        }
        function c2k($degree) 
	{
                return number_format((float)$degree + 273.15, 2, '.', '');
        }
        function k2c($degree) 
	{
                return number_format((float)$degree - 273.15, 2, '.', '');
        }
        function k2f($degree) {
                return number_format((float)9/5*($degree - 273.15) + 32, 2, '.', '');
        }
     }
?>