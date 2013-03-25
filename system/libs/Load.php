<?php

namespace system\libs;

class Load
{
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	public function view($name, array $vars = null)
	{
		$head = APP_PATH.DS.'views'.DS."header".EXT;
		$file = APP_PATH.DS.'views'.DS.$name.EXT;
		$foot = APP_PATH.DS.'views'.DS."footer".EXT;
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
    public function helper($helper) {
    	echo SYS_PATH.DS."helpers/".$helper.".php";
        if (file_exists(SYS_PATH.DS."helpers/".$helper.EXT)){
            require_once SYS_PATH.DS."helpers/".$helper.EXT;
            $this->$helper = new $helper;
        }else{
            echo 'Error Helper...!!!';
        }
    }
}