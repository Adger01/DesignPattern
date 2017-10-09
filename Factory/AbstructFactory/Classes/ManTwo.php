<?php
namespace Factory\AbstructFactory\Classes;
/**
* 
*/
use Factory\AbstructFactory\Contracts\People;

class ManTwo implements People
{
	function say()
	{
		echo 'ManTwo say hello';
		echo "<br>";
	}
}