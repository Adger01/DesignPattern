<?php
namespace Factory\Simple\Factorys;
/**
* 
*/
use Factory\Simple\Classes\Man;
use Factory\Simple\Classes\WoMan;

class SimpleFactory
{
	
	static function createMan()
	{
		#可以与单例模式一起使用
		return new Man();
	}

	static function createWoman(){
		#可以与单例模式一起使用
		return new WoMan();
	}

	
}