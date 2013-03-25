<?php

namespace system\libs;
use Exception;

class Dispatcher
{ 
	//////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////
	public static function passRequest($controller, $method, $args = false, $namespace = false) {
		if($namespace === false) {
			$namespace = str_replace(DS,BS, APP_PATH .DS.'controllers'. BS) ;
		}  
		$class = $namespace . $controller;
		(@class_exists($class)) ?: $class = $namespace . DEFAULT_CONTOLLER;
		(method_exists($class, $method)) ?: $method = DEFAULT_METHOD;
		$obj = $class::getInstance();
		// $obj->setParameters($args); /// ini belum digunakan...
		try {
			call_user_func_array(array($obj, $method), array());
		}
		catch(Exception $e) {
			throw new Exception($e->getMessage());
		}
	}
	//////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////
}
 