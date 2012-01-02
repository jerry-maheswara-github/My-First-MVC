<?php

namespace system\core;
use system\core\load;


class Controller
{
	private static $_instance;
	private $_storage;
	protected $load;

	protected $controller;
	protected $method;
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	public function __construct($controller, $method){
		$this->controller = $controller;
		$this->method     = $method;
 		$this->load       = new Load;
	}
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	public function dispatch()
	{
		$method = $this->method;
		if (method_exists($this, $method))
		{			
			$this->$method();
		}		
		else 
		{
			$this->data['message'] = "Function <b>'$method()'</b> belum ada!";
			$this->utama();	
		}
	}
 
 
}