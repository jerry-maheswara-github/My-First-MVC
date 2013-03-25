<?php

namespace system;

function load_system($namespace)
{
	// echo $namespace.BR;
	if(strpos($namespace, __NAMESPACE__) === 0) {
		$namespace = ltrim(strtolower($namespace), BS);
		$path = __DIR__ . DS . str_replace(BS, DS, substr($namespace, strlen(__NAMESPACE__) + 1)) . EXT;
		(@file_exists($path)) ? include $path : die("<b>Error: <font color=red>". $namespace . "</font> not exist!</b>");
	}
}

spl_autoload_register(__NAMESPACE__ . BS . 'load_system');

// echo '<pre>';
// print_r(set_include_path(get_include_path() . PS . __DIR__ . DS));
// echo '</pre>';

// function load($namespace) {
//     $splitpath = explode('\\', $namespace);
//     $path = '';
//     $name = '';
//     $firstword = true;
//     for ($i = 0; $i < count($splitpath); $i++) {
//         if ($splitpath[$i] && !$firstword) {
//             if ($i == count($splitpath) - 1)
//                 $name = $splitpath[$i];
//             else
//                 $path .= DIRECTORY_SEPARATOR . $splitpath[$i];
//         }
//         if ($splitpath[$i] && $firstword) {
//             if ($splitpath[$i] != __NAMESPACE__)
//                 break;
//             $firstword = false;
//         }
//     }
//     if (!$firstword) {
//         $fullpath = __DIR__ . $path . DIRECTORY_SEPARATOR . $name . '.php';
//         return include_once($fullpath);
//     }
//     return false;
// }

// function loadPath($absPath) {
//         return include_once($absPath);
// }

// // spl_autoload_register();
// spl_autoload_register(__NAMESPACE__ . '\load');













// if (function_exists('spl_autoload_register')) {
//   spl_autoload_register(__NAMESPACE__ . BS . 'load_system');
// } else {
//   function __autoload($namespace)
//   {
//     load_system($namespace);
//   }
// }

/* 

__autoload = untuk single autoloader;
spl_autoload_register = lebih dinamis karena bisa untuk banyak autoload;

contoh: 
//------------------------------------------//
//------------------------------------------//
function __autoload_libraries($class){
    include_once 'lib.'.$class.'.php';
}
spl_autoload_register('__autoload_libraries');

//------------------------------------------//
//------------------------------------------//

function __autoload($class){
    include_once 'lib.'.$class.'.php';
}
//------------------------------------------//
//------------------------------------------//

*/