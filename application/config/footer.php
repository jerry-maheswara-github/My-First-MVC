<?php

namespace application\config;
use system\helpers\helperhtml;

class Footer
{
	public function tendang()
	{
		$this->html = new Helperhtml;
		echo '<hr>';
		echo '(c) 2012 - Jerry Maheswara';
		echo BR.BR.'<div style=\'background-color:#cdcdcd; padding:10px;\'><pre>';
		echo '<hr color=red size=2>';

	}

}