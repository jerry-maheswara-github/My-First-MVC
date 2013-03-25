<?php

require_once("system/libs/Init.php");
use system\libs\init;
Init::hajar();

////////////////////////////////////////////////////////
///////////////                /////////////////////////
///////////////   UNTUK TEST   /////////////////////////
///////////////                /////////////////////////
////////////////////////////////////////////////////////




echo "<hr color=blue size=10>";
// 
// 

// use system\helpers\helperhtml;

// echo Helperhtml::img('me.jpg');

// get_defined_constants
// Init::pr(get_defined_constants(true));
Init::pr(get_included_files());
