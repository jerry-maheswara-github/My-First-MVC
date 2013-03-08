<?php

namespace system\libs; 

class Request{

	public function __call($name, $arguments) {
		$methodPrefix = substr($name, 0, 4);
		$property = substr($name,4);
		$rURL  = parse_url($arguments[0], 5); // 5 = PHP_URL_PATH
		$rQS   = parse_url($arguments[0], 6); // 6 = PHP_URL_QUERY or 7 = PHP_URL_FRAGMENT
		$level = $arguments[1];

		if ($methodPrefix=='set_'){
			if (substr($rURL, -5) == ".html"){
				$trimmed = str_replace(".html", "", $rURL); // buang .html dari URL
				$a = explode('/', rawurldecode($trimmed));
			}
			else{
				$a = explode('.', rawurldecode($rURL)); // buang semua setelah . (titik) dari URL
				$a = explode('/', $a[0]);
			}
			$a = array_filter($a); //// buang array yg kosong
			if ($level == 1){
				($value = array_shift(array_slice($a,0,1))) ?: $value='index';
			}
			else if($level == 2){
				($value = array_shift(array_slice($a,1,1))) ?: $value='main';
			}
			else if($level === 3){
				$value = array_slice($a,2);
			}
			else{
				echo $name . '($value, 1,2,3 saja)';
			}

            $this->$property = $value;
		}
		else if ($methodPrefix=='get_'){
			return $this->$property ;
		}

		
	}
	 
}
