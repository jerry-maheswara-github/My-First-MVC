<?php

namespace system\libs;

class Init
{ 
	function __construct()
	{
		define('ABS', 'http://1st.com/');
		define('DS', DIRECTORY_SEPARATOR); 
		define('SP', "&nbsp;");
		define('HR', "<hr>");
		define('BR', "<br>");
		define('BS', chr(92)); // backslash 
		define('SITE_PATH', realpath(dirname(__FILE__)). DS);
		define('SYS_PATH', 'system' . DS);
		define('APP_PATH', 'application' . DS);
		define('EXT', '.php');
		define('URI', $_SERVER["REQUEST_URI"]);
		/////////////////////////////////////////////////////////////
		//////////////////////// DATABASE CONFIG ////////////////////
		/////////////////////////////////////////////////////////////
		define('DB_TYPE', 'mysql');
		define('DB_HOST', 'localhost');
		define('DB_NAME', 'mvc');
		define('DB_USER', 'root');
		define('DB_PASS', '');
		/////////////////////////////////////////////////////////////
		/////////////////////////////////////////////////////////////
		////// Semua Class boleh dimasukkan setelah ini. ////////////
		/////////////////////////////////////////////////////////////
		require_once(SYS_PATH . rtrim(SYS_PATH, DS) . '.inc'.EXT);
		require_once(APP_PATH . rtrim(APP_PATH, DS) . '.inc'.EXT);
		/////////////////////////////////////////////////////////////

		new Bootstrap;
		new Model;

  	}
}
 