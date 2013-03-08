<?php

namespace system\libs;
use Exception;

class Dispatcher
{ 
	//////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////
	public static function passRequest($controller, $method, $args = false, $namespace = false) {
		if($namespace === false) {
			$namespace = str_replace(DS,BS, APP_PATH .'controllers'. BS) ;
		}  
		$class = $namespace . $controller;
		(@class_exists($class)) ?: $class = $namespace . 'index';
		(method_exists($class, $method)) ?: $method = 'main';
		$obj = $class::getInstance();
		$obj->setParameters($args); /// ini belum digunakan...
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
 