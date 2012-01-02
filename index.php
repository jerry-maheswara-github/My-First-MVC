<?php

$system_path        = 'system';
$application_folder = 'application';

$system_path        = rtrim($system_path, '/').'/';
$application_folder = rtrim($application_folder, '/').'/';

define('SITE_PATH', realpath(dirname(__FILE__)).'/');
define('BASE_PATH', str_replace('\\', '/', $system_path));
define('APP_PATH' , str_replace('\\', '/', $application_folder));
define('EXT', '.php');

require_once(APP_PATH . rtrim(APP_PATH,'/') . '.inc'.EXT);

$uri = explode("/", $_SERVER['REQUEST_URI']);
$uri = array_filter($uri);
 
if(empty($uri[1]))
{
	$uri[1] = index;
	$obj = str_replace('/','\\', $application_folder.'controllers\\' . $uri[1]);
	$i = new $obj($uri[1],$uri[2]);
	$i->dispatch();
}

else
{
	$obj = str_replace('/','\\', $application_folder.'controllers\\' . $uri[1]);
	if (class_exists($obj))
	{
		$i = new $obj($uri[1],$uri[2]);
		$i->dispatch();
	}
}


// echo "<pre>". print_r(get_included_files(),1) . " <br>";

