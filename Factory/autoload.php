<?php


function my_autoload ($pClassName) {
      include BASEDIR.'/'.str_replace('\\', '/', $pClassName).'.php';
 }

spl_autoload_register("my_autoload");