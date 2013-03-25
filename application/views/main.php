
<?php

echo '<h1>\'main\' sebagai Method (default)</h1> ';
echo '<h2>'.$message.'</h2>';

if (is_array($link))
{
	$i = 0;
	foreach($link as $item){
		$i += 1;
		echo $item;
		if($i < count($link)){ echo " | ";}
}
}