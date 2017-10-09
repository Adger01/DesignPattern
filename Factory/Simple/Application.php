<?php
namespace Factory\Simple;
/**
* 简单的工厂模式 使用一个类 下面定义N多个静态方法 
* 工厂模式可以与单例模式一起使用
*/

use Factory\Simple\Classes\Man;
use Factory\Simple\Classes\Woman;
use Factory\Simple\Factorys\SimpleFactory;

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
		$manFactory = SimpleFactory::createMan();
		$manFactory->say();

		$womanFactory = SimpleFactory::createWoman();
		$womanFactory->say();
		//
		//
		//
	}
}