<?php
namespace Factory\FactoryMethod\Factorys;
/**
* 
*/
use Factory\FactoryMethod\Classes\Man;
use Factory\FactoryMethod\Contracts\createPeople;

class FactoryMan implements createPeople
{
	
	public function create()
	{
		#可以与单例模式一起使用
		return new Man();
	}
	
}