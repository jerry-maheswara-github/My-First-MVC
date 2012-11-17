<?php

namespace system;
use Exception;

function load_system($namespace)
{
	try
	{
		if(strpos($namespace, __NAMESPACE__) === 0) {
			$namespace = strtolower($namespace);
			$namespace = ltrim($namespace, BS);
			$path = __DIR__ . DS . str_replace(BS, DS, substr($namespace, strlen(__NAMESPACE__) + 1)) . EXT;
			if(@file_exists($path)) 
			{
				include $path;
			}
			else 
			{
				throw new Exception("<b>Error: <font color=red>". $namespace . "</font> not exist!</b>", 1);
			}
		}
	}
	catch(Exception $e)
	{
		echo BR.$e->getMessage(); 
	}
}

spl_autoload_register(__NAMESPACE__ . BS . 'load_system');


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