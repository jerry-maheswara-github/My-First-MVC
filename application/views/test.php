<?php


function getCurrentUri() {
	if($_SERVER['PATH_INFO']) {
		return $_SERVER['PATH_INFO'];
	}
	else {
		if($_SERVER['PHP_SELF']) {
			return $_SERVER['PHP_SELF'];
		}
		else if($_SERVER['REQUEST_URI']) {
			$uri = $_SERVER['REQUEST_URI'];
			if($request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
				$uri = $request_uri;
			}
			return rawurldecode($uri);
		}
		else {
			echo("Could not detect URI using PATH_INFO, PHP_SELF, or REQUEST_URI");
		}
	}
}

echo "<h1>getCurrentUri = ".getCurrentUri();
echo "</h1>";
echo "<h2>$message</h2>";
echo BR;
