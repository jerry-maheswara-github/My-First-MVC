<?php

namespace system\core;

class Controller
{
	
	function __construct()
	{
		echo "<pre>";
		echo get_called_class();
		echo "</pre>";
	}

	function c_coba()
	{
		
		echo "ini dari : ". __CLASS__."<br>";
	}
}