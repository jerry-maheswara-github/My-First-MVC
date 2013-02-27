<?php

namespace system\libs;
use system\libs\boostrap;


class Init
{ 
	function __construct()
	{
		define('ABS', 'http://1st.mvc/');
		define('DS', DIRECTORY_SEPARATOR); 
		define('SP', "&nbsp;");
		define('BR', "<br>");
		define('BS', chr(92)); // backslash
		define('SITE_PATH', realpath(dirname(__FILE__)). DS);
		define('SYS_PATH', 'system' . DS);
		define('APP_PATH', 'application' . DS);
		define('EXT', '.php');
		define('REQ', $_SERVER['REQUEST_URI']); 

		if (substr(REQ, -5) == ".html"){
			$trimmed = str_replace(".html", "", REQ);
			define('URL', $trimmed); // ini untuk memisah .html di belakang
		}else{
			define('URL', REQ); 
		}

		require_once(SYS_PATH . rtrim(SYS_PATH, DS) . '.inc'.EXT);
		require_once(APP_PATH . rtrim(APP_PATH, DS) . '.inc'.EXT);

		new Bootstrap;


  	}
}
 