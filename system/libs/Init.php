<?php

namespace system\libs;

class Init
{ 
	public static function hajar()
	{
		// define('ABS', 'http://localhost/My-First-MVC'); // dipake class Request
		define('ABS', ''); // absolut path eg.: http://1st.mvc
		// define('ABS', 'http://1st.mvc'); // absolut path eg.: http://1st.mvc
		define('DS', DIRECTORY_SEPARATOR); 
		define('PS', PATH_SEPARATOR); 
		define('SP', '&nbsp;'); // spasi
		define('HR', '<hr>');
		define('BR', '<br>');
		define('IMG', 'public/images');
		define('CSS', 'public/css');
		define('JS',  'public/js');
		define('BS', chr(92)); // backslash 
		define('SITE_PATH', realpath(dirname(__FILE__)));
		define('SYS_PATH', 'system');
		define('APP_PATH', 'application');
		define('EXT', '.php');
		define('FAKE_EXT', '.do'); // dipake class Request
		define('URI', $_SERVER['REQUEST_URI']);
		define('DEFAULT_CONTOLLER', 'index'); // dipakai di Request & Dispatcher
		define('DEFAULT_METHOD', 'main'); // dipakai di Request & Dispatcher
		define('HOME', ((ABS=='') ? 'http://'.$_SERVER["HTTP_HOST"] : ABS));
		/////////////////////////////////////////////////////////////
		//////////////////////// DATABASE CONFIG ////////////////////
		/////////////////////////////////////////////////////////////
		define('DB_TYPE', 'mysql');
		define('DB_HOST', 'localhost');
		define('DB_NAME', 'mvc');
		define('DB_USER', 'root');
		define('DB_PASS', '');
		/////////////////////////////////////////////////////////////
		////// Semua Class boleh dimasukkan setelah ini. ////////////
		/////////////////////////////////////////////////////////////
		self::config(SYS_PATH, APP_PATH); // memanggil __autoload atau spl_autoload_register


		new Bootstrap;

		// $m = new Model;
		// $m->run();
  	}
 	//////////////////////////////////////////////////////////////////////////
 	//////////////////////////////////////////////////////////////////////////
 	public static function config() {
		$args = func_get_args();
		foreach ($args as $arg) {require_once($arg .DS. rtrim($arg, DS) . '.inc'.EXT);}
	}
 	//////////////////////////////////////////////////////////////////////////
 	public static function pr($var){ echo '<pre>'; print_r($var); echo '</pre>';}
 	//////////////////////////////////////////////////////////////////////////

}

 