<?php
namespace Factory\AbstructFactory\Factorys;
/**
* 
*/
use Factory\AbstructFactory\Classes\Man;
use Factory\AbstructFactory\Classes\ManTwo;
use Factory\AbstructFactory\Contracts\createPeople;

class FactoryMan implements createPeople
{
	
	public function create()
	{
		#可以与单例模式一起使用
		return new Man();
	}

	public function createTwo(){
		return new ManTwo();
	}
	
}