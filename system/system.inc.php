<?php

namespace system;

function load_system($namespace)
{
	$namespace = strtolower($namespace);
	while($namespace[0] === '\\') {
		$namespace = substr($namespace, 1);
	}

	if(strpos($namespace, __NAMESPACE__) === 0) {
		$path = __DIR__ . '/' . str_replace('\\', '/', 
			substr($namespace, strlen(__NAMESPACE__) + 1)) . '.php';
		if(@file_exists($path))
			include $path;
		else
			echo "<h1>Error 404 - ". substr($namespace, strlen(__NAMESPACE__) + 1) . " not exist!</h1>";
	}
}

spl_autoload_register(__NAMESPACE__ . '\load_system');