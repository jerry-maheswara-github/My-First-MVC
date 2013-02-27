<?php

namespace system\libs;
use system\libs\request;

class Bootstrap{

	function __construct()
	{
		$a = new Request();
		$ctrl = $a->getController();
		$metd = $a->getMethod();
		$args = $a->getArgs();

		$obj = str_replace(DS,BS, APP_PATH .'controllers'.BS . $ctrl);
		$i = new $obj($ctrl,$metd);
		$i->dispatch();

	}

}


?>


