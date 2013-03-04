<?php

namespace system\libs;

// class Bootstrap extends Request{
class Bootstrap{

	function __construct()
	{

		Dispatcher::hajar();

		$a = new Request();

		$a -> controller = 'cont';
		$a -> method = 'meth';
		

		echo $a->controller;
		echo $a->method;
	}

}


?>


