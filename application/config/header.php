<?php

namespace application\config;
use system\helpers\helperhtml;

class Header 
{
	function hajar()
	{
		$this->html = new Helperhtml;


		$c = array(
			  $this->html->anchor(ABS.'/index', 'Index')
			, $this->html->anchor(ABS.'/index/welcome', 'index/welcome')
			, $this->html->anchor(ABS.'/index/welcome/back', 'index/welcome/back')
			, $this->html->anchor(ABS.'/index/welcome/back/space', 'index/welcome/back/space')
			, $this->html->anchor(ABS.'/index/welcome/back/space/invander', 'index/welcome/back/space/invander')
			, $this->html->anchor(ABS.'/welcome', 'Welcome')
			, $this->html->anchor(ABS.'/welcome/index', 'Welcome/index')
			);
		return $c;
	}
}

 