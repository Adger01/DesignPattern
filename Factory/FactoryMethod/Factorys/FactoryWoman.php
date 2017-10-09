<?php
namespace Factory\FactoryMethod\Factorys;
/**
* 
*/
use Factory\FactoryMethod\Classes\WoMan;
use Factory\FactoryMethod\Contracts\createPeople;

class FactoryWoman implements createPeople
{
	public function create()
	{
		#可以与单例模式一起使用
		return new WoMan();
	}
}