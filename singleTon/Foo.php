<?php
/**
* 俗称三私一公
* 私有的构造方法 禁止外部new
* 私有的静态的变量 存放实例 设置成静态的是禁止外部直接使用 统一标准
* 私有的克隆方法 禁止外部克隆 因为克隆会造成两个实例
* 公有的静态方法instance 获取单例
*/

class Foo
{
	/**
	 * 私有的静态的变量 存放实例 设置成静态的是禁止外部直接使用 统一标准
	 */
	private static  $self;

	public $var;
	
	/**
	 * 私有的构造方法 禁止外部new
	 */
	private function __construct(){
		echo '这是私有的构造方法';
		echo "<br>";
	}

	/**
	 * 私有的克隆方法 禁止外部克隆 因为克隆会造成两个实例
	 */
	private function __clone(){
		echo '这是私有的克隆方法';
		echo "<br>";

	}

	/**
	 * 公有的静态方法instance 获取单例
	 */
	public static function instance(){
		if(self::$self == null){
			self::$self = new self();
		}
		return self::$self;
	}

	
	public function setVar($var){
		$this->var = $var;
	}

	public function getVar(){
		return $this->var;
	}

	

}