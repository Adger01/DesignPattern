<?php
namespace Factory\AbstructFactory\Classes;
/**
* 
*/
use Factory\AbstructFactory\Contracts\People;

class Man implements People
{
	function say()
	{
		echo 'man say hello';
		echo "<br>";
	}
}