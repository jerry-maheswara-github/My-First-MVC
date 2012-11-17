<?php

////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
// ini disimpan di constant ajah....


require_once("system/core/Init.php") ;
use system\core\init;
new Init;

////////////////////////////////////////////////////////////////////////////////


//////---- Mulai aplikasi ------- //////////////////////////////////////////////
//////---- Ini nanti simpan di Bootstrap aja ------- //////////////////////////////////////////////

$uri = explode('.', $_SERVER['REQUEST_URI']); // hitungan array dimulai dari 0
$uri = explode(DS, $uri[0]); // hitungan array dimulai dari 0
$uri = array_filter($uri);   // hitungan array dimulai dari 1

$cur_folder = explode(DS, __DIR__);
$cur_folder = array_filter($cur_folder);
$exi_folder = count($cur_folder);
// echo "Current Folder App: ".$cur_folder[$exi_folder];

// echo $uri[3];
// echo count($uri);

// aplikasi tidak boleh di sub folder lebih dalam
// harus di root atau subfolder level 1 saja...

if(empty($uri[1]) or ($uri[1] == $cur_folder[$exi_folder])) 
{
	$uri[1] = index;
	$obj = str_replace(DS,BS, APP_PATH .'controllers'.BS . $uri[1]);
	$i = new $obj($uri[1],$uri[2]);
	$i->dispatch();
}

else
{
	$obj = str_replace(DS,BS, APP_PATH .'controllers'.BS. $uri[1]);
	if (class_exists($obj))
	{
		$i = new $obj($uri[1],$uri[2]);
		$i->dispatch();
	}
}
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
// Buat NGETES ajaa....
////////////////////////////////////////////////////////////////////////////
// echo "<pre>";
// echo substr($_SERVER['REQUEST_URI'],1) ."<br>";
// echo "<hr>". getcwd() ."<hr>"; // sama dengan __DIR__ dan SITE_PATH
// echo "<hr>". __DIR__ ."<hr>";
// echo "<hr>". __LINE__ ."<hr>";
// echo "<hr>". SITE_PATH ."<hr>";

// echo "<hr>". print_r(get_included_files(),1) . " <br>"; // melihat semua file yg di include

// echo "<hr>print_r(\$uri): <br>";
// echo print_r($uri) ;
// echo "<hr>print_r(\$cur_folder): <br>";
// echo print_r($cur_folder) ;
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
function getRequestResource() {
		if(isset($_SERVER["PATH_INFO"])) {
			return $_SERVER["PATH_INFO"];
		}
		else if(isset($_SERVER["PHP_SELF"])) {
			return $_SERVER["PHP_SELF"];
		}
		else if(isset($_SERVER["REQUEST_URI"])) {
			$uri = $_SERVER["REQUEST_URI"];
			if($request_uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)) {
				$uri = $request_uri;
			}
			return rawurldecode($uri);	
		}
		else {
			die("Could not find the request URI using PATH_INFO, PHP_SELF, or REQUEST_URI.");
		}
	}

echo "<hr>Request Resource = <font color=red>". getRequestResource() ."</font>";

////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
function getRequestMethod() {
		if(isset($_SERVER["REQUEST_METHOD"])) {
			return $_SERVER["REQUEST_METHOD"];
		}
		else {
			die("Could not find the Request Method");
		}
	}

echo "<hr>REQUEST_METHOD =  <font color=red>". getRequestMethod() ."</font>";	

echo ltrim("\\\halo","\\");

// function jajal(){
// 	try{
// 		@$total = 100/0;
// 		if(! $total){
// 			throw new Exception("Salah melakukan pembagian", 1);
			
// 		}	
// 	}
// 	catch(Exception $e){
// 		echo "<pre>Terjadi Kesalahan:<br>";
// 		echo "<br>getFile : ". $e->getFile();
// 		echo "<br>getLine: ". $e->getLine();
// 		echo "<br>getCode : ". $e->getCode();
// 		echo "<br>getMessage: ". $e->getMessage(); 
// 		echo "<br>getfunction: ". $e->getTraceAsString(); 
// 		// echo "<hr>getTrace: ". var_dump($e->getTrace()); 
// 	}
// }
// jajal();

// function jajal1()
// {
// 	@$total = 100/0;
// 	if(! $total){
// 		throw new Exception("Salah melakukan pembagian", 1);
// 	}

// }
// jajal1();
 

function convertToRegex($str) {
	$regex = "`";
	if($str[0] == "/") {
		$str = substr($str, 1);
	}
	$alias_segments = explode("/", $str);
	foreach($alias_segments as $expression) {
		if(strpos($expression, ":") === 0) {
			$regex .= "/[a-zA-Z0-9]+";
		}
		else {
			$regex .= "/{$expression}";
		}
	}
	return $regex . "`";
}
echo BR;
echo convertToRegex("http://1st.mvc/index/welcome/back/home/as/2010/blabla.html");


 