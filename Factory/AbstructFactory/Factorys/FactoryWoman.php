<?php
namespace Factory\AbstructFactory\Factorys;
/**
* 
*/
use Factory\AbstructFactory\Classes\Woman;
use Factory\AbstructFactory\Classes\WomanTwo;

use Factory\AbstructFactory\Contracts\createPeople;

class FactoryWoman implements createPeople
{
	public function create()
	{
		#可以与单例模式一起使用
		return new WoMan();
	}

	public function createTwo()
	{
		#可以与单例模式一起使用
		return new WomanTwo();
	}
}