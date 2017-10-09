<?php
namespace Factory\AbstructFactory\Contracts;
/**
 * 遵循开放封闭原则
 * 开放  是接口开放 可以随时扩展
 * 封闭  是已经有的逻辑不能做更改
 */
interface createPeople{
	public function create();
}