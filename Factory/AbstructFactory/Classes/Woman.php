<?php
namespace Factory\AbstructFactory\Classes;
/**
* 
*/
use Factory\AbstructFactory\Contracts\People;

class Woman implements People
{
	
	function say()
	{
		echo 'woman say hello ';
		echo "<br>";
	}
}