<?php
	echo "<h2>单例模式学习</h2>";

	require 'Foo.php';

	$a = Foo::instance();
	$b = Foo::instance();

	$a->setVar('test');

	print_r($a->getVar());
	echo "<br>";
	print_r($b->getVar());