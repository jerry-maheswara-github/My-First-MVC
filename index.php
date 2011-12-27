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

// echo "<pre>". print_r(get_included_files(),1) . " <br>";

// echo "__DIR__  : ". __DIR__  ."<br>";
// echo "__FILE__ : ". __FILE__ ."<br>";


use application\controllers\welcome;

$w = new Welcome;

// $w->coba();