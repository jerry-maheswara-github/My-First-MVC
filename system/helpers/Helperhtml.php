<?php

namespace system\helpers;

class Helperhtml
{
	public function __construct()
	{
		// echo __NAMESPACE__.BR;
	}

	public function img($src){
		return '<img src=\''.ABS.DS.IMG.DS.$src.'\' >';
	}

	public function anchor($uri = '', $title = '', $attributes = '')
	{
		return '<a href="'.$uri.'"'.$attributes.'>'.$title.'</a>';
	}
}

