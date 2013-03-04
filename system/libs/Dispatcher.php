<?php

namespace system\libs;
use Exception;

class Dispatcher
{ 
	//////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////
	public static function getURI() {
		if (URI) {
			if (substr(URI, -5) == ".html"){
				$trimmed = str_replace(".html", "", URI);
				return rawurldecode($trimmed);
			}
			else{
				return rawurldecode(URI);
			}
		}
		else{
			echo 'Error: Tidak ditemukan REQUEST_URI';
		}
	}
	//////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////
	public static function passRequest($controller, $method, $args = false, $namespace = false) {
		if($namespace === false) {
			$namespace = str_replace(DS,BS, APP_PATH .'controllers'. BS) ;
		}  
		$class = $namespace . $controller;
		if(@class_exists($class)) {
			(! method_exists($class, $method)) ? $method='main':$method;

			$obj = $class::getInstance();
			$obj->setParameters($parameters);
			try {
				call_user_func_array(array($obj, $method), array());
			}
			catch(Exception $e) {
				throw new Exception($e->getMessage());
			}
		}
		else {
			throw new Exception("Could not find controller {$controller}");
		}
	}
	//////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////
	public static function hajar()
	{
		$parts = explode('/', Dispatcher::getURI());
		$parts = array_filter($parts);

		$ctrl = ($c = array_shift($parts))? $c : 'index';
		$metd = array_shift($parts);
		// $metd = ($c = array_shift($parts))? $c : 'main';
		$args = (isset($parts[0])) ? $parts :  array();
		
		static::passRequest($ctrl, $metd, $args);

	}
}
 