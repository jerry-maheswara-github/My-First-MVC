<?php
namespace system\core;
use system\core\load;

class Controller
{ 
	protected $load;
	protected $controller;
	protected $method;
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	public function __construct($controller, $method){
		$this->controller = $controller;
		$this->method     = $method;
 		$this->load       = new Load;
	}
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
			$this->main();	
		}
	}
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	public static function jump($page)
	{
		if(!headers_sent)
		{
			header("Location:".$page);
			exit();
		}
		else
		{
			die ("<meta http-equiv='refresh' content='10;URL=".$page."'>");
		}
	}
 
}

