<?php
namespace Factory\AbstructFactory\Classes;
/**
* 
*/
use Factory\AbstructFactory\Contracts\People;

class WomanTwo implements People
{
	
	function say()
	{
		echo 'WomanTwo say hello ';
		echo "<br>";
	}
}