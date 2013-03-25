<?php

namespace application;

function load_application($namespace) 
{
	$namespace = ltrim(strtolower($namespace),BS);
	$path = __DIR__.DS.str_replace(BS, DS, substr($namespace, strlen(__NAMESPACE__) + 1)) . EXT;
	(@file_exists($path)) ? include $path : die('<meta http-equiv=\'refresh\' content=\'0;URL='.HOME.'\'>');
}

// ini fungsinya sama dengan __autoload
spl_autoload_register(__NAMESPACE__ .BS. 'load_application');


/* 

__autoload = untuk single autoloader;
spl_autoload_register = lebih dinamis karena bisa untuk banyak autoload;

contoh: 
//------------------------------------------//
//------------------------------------------//
function __autoload_libraries($class){
    include_once 'lib.'.$class.'.php';
}
spl_autoload_register('__autoload_libraries');

//------------------------------------------//
//------------------------------------------//

function __autoload($class){
    include_once 'lib.'.$class.'.php';
}
//------------------------------------------//
//------------------------------------------//

*/