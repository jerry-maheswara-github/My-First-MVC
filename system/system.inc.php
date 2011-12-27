<?php

namespace system;

function load($namespace)
{
	$namespace = strtolower($namespace);
	while($namespace[0] === '\\') {
		$namespace = substr($namespace, 1);
	}

	if(strpos($namespace, __NAMESPACE__) === 0) {
		$path = __DIR__ . '/' . str_replace('\\', '/', 
			substr($namespace, strlen(__NAMESPACE__) + 1)) . '.php';
		include $path;
	}
}

spl_autoload_register(__NAMESPACE__ . '\load');