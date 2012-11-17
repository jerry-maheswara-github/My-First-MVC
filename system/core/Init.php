<?php

namespace system\core;


class Init
{ 
	function __construct()
	{
		define('ABS', 'http://1st.mvc/');
		define('DS', DIRECTORY_SEPARATOR);
		define('SP', "&nbsp;");
		define('BR', "<br>");
		define('BS', chr(92)); // backspace
		define('SITE_PATH', realpath(dirname(__FILE__)). DS);
		define('SYS_PATH', 'system' . DS);
		define('APP_PATH', 'application' . DS);
		define('EXT', '.php');
		
		require_once(SYS_PATH . rtrim(SYS_PATH, DS) . '.inc'.EXT);
		require_once(APP_PATH . rtrim(APP_PATH, DS) . '.inc'.EXT);

  	}
}
 