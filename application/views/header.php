<?php

use application\config\header;

$he =  new Header;
$ha =  $he->hajar();

echo HR;

if (is_array($ha))
{
	$i = 0;
	foreach($ha as $item){
		$i += 1;
		echo $item;
		if($i < count($ha)){ echo " | ";}
	}
}
echo HR;
echo $gambar;

?>