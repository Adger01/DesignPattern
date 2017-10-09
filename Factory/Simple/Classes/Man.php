<?php
namespace Factory\Simple\Classes;
/**
* 
*/
use Factory\Simple\Contracts\People;

class Man implements People
{
	function say()
	{
		echo 'man say hello';
		echo "<br>";
	}
}