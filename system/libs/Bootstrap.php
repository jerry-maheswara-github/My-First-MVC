<?php

namespace system\libs;

// class Bootstrap extends Request{
class Bootstrap{

	function __construct()
	{
		$s = new Request;
		$s -> set_con(URI,1);
		$s -> set_fun(URI,2);
		$s -> set_arg(URI,3);

		Dispatcher::passRequest($s->con,$s->fun,$s->arg);

		// print_r($s);

 	}

}


?>


