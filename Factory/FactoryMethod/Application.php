<?php
namespace Factory\FactoryMethod;
/**
* 简单的工厂模式 使用一个类 下面定义N多个静态方法 
* 工厂模式可以与单例模式一起使用
*/

use Factory\FactoryMethod\Classes\Man;
use Factory\FactoryMethod\Classes\Woman;
use Factory\FactoryMethod\Factorys\FactoryMan;
use Factory\FactoryMethod\Factorys\FactoryWoman;

class Application
{
	
	static function run()
	{
		//传统的new一个woman和man对象
		$man = new Man();
		$woman = new Woman();

		$man->say();
		$woman->say();



		#使用简单的工厂模式
		$factoryMan = new FactoryMan();
		$man = $factoryMan->create();
		$man->say();

		$factoryWoman = new FactoryWoman();
		$woman = $factoryWoman->create();
		$woman->say();

		
		//
		//
		//
	}
}