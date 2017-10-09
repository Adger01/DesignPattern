<?php
namespace Factory\Simple\Classes;
/**
* 
*/
use Factory\Simple\Contracts\People;

class Woman implements People
{
	
	function say()
	{
		echo 'woman say hello ';
		echo "<br>";
	}
}