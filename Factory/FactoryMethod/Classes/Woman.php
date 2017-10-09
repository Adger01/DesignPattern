<?php
namespace Factory\FactoryMethod\Classes;
/**
* 
*/
use Factory\FactoryMethod\Contracts\People;

class Woman implements People
{
	
	function say()
	{
		echo 'woman say hello ';
		echo "<br>";
	}
}