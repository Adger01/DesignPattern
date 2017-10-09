<?php
namespace Factory\Simple;

//定义根目录
define('BASEDIR', dirname(dirname(__DIR__)));

//自动加载类
require '../autoload.php';

Application::run();

