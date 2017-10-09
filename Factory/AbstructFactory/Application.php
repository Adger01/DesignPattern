<?php
namespace Factory\AbstructFactory;
/**
* 简单的工厂模式 使用一个类 下面定义N多个静态方法 
* 工厂模式可以与单例模式一起使用
*/

use Factory\AbstructFactory\Classes\Man;
use Factory\AbstructFactory\Classes\ManTwo;

use Factory\AbstructFactory\Classes\Woman;
use Factory\AbstructFactory\Classes\WomanTwo;

use Factory\AbstructFactory\Factorys\FactoryMan;
use Factory\AbstructFactory\Factorys\FactoryWoman;

class Application
{
	
	static function run()
	{
		//传统的new一个woman和man对象
		$man = new Man();
		$manTwo = new ManTwo();
		$woman = new Woman();
		$womanTwo = new WomanTwo();

		$man->say();
		$manTwo->say();
		$woman->say();
		$womanTwo->say();



		#使用简单的工厂模式
		$factoryMan = new FactoryMan();
		$man = $factoryMan->create();
		$man->say();
		$createTwo = $factoryMan->createTwo();
		$createTwo->say();

		$factoryWoman = new FactoryWoman();
		$woman = $factoryWoman->create();
		$woman->say();

		$woman = $factoryWoman->createTwo();
		$woman->say();

		
		//
		//
		//
	}
}