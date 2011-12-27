<?php

namespace application\controllers;

use system\core\controller;

class Welcome extends Controller
{
	function __construct()
	{ 
		echo "<pre>";
		parent::c_coba();
		echo "ini dari : ". __CLASS__ ."<br>";
	}
}