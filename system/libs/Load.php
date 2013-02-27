<?php

namespace system\libs;

class Load
{
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	public function view($name, array $vars = null)
	{
		$head = APP_PATH.'views'.DS."header".EXT;
		$file = APP_PATH.'views'.DS.$name.EXT;
		$foot = APP_PATH.'views'.DS."footer".EXT;
		if(is_readable($file)){
			if(isset($vars)){
				extract($vars);
			}
			require($head);
			require($file);
			require($foot);
			return true;
		}
		echo "<h1>$name method Error View</h1><hr>";
		// throw new Exception('View issues');
	}	
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	public function model($name){
		// $model = $name.'Model';
		$modelPath = APP_PATH.'models'.DS.$name.EXT;
		if(is_readable($modelPath)){
			require_once($modelPath);
			if(class_exists($name)){
				$registry = Controller::getInstance();
				$registry->$name = new $name;
				return true;
			}
		}
		echo('Model issues.');	
	}	
}