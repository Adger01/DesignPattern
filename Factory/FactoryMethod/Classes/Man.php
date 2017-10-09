<?php
namespace Factory\FactoryMethod\Classes;
/**
* 
*/
use Factory\FactoryMethod\Contracts\People;

class Man implements People
{
	function say()
	{
		echo 'man say hello';
		echo "<br>";
	}
}