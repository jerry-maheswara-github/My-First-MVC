<?php

namespace system\libs; 

class Request{

	public function __call($name, $arguments) {
		$methodPrefix = substr($name, 0, 4);
		$property = substr($name,4);
		// $rQS   = parse_url($arguments[0], 6); // 6 = PHP_URL_QUERY or 7 = PHP_URL_FRAGMENT // belum dipakai
		$rURL = str_replace(parse_url(ABS, 5), '', parse_url($arguments[0], 5)); // 5 = PHP_URL_PATH
		$level = $arguments[1];

		if ($methodPrefix=='set_'){
			if (substr($rURL, -strlen(FAKE_EXT)) == FAKE_EXT){
				$trimmed = str_replace(FAKE_EXT, '', $rURL); // buang .html dari URL
				$a = array_filter(explode('/', rawurldecode($trimmed)));
			}
			else{
				$a = explode('.', rawurldecode($rURL)); // buang semua setelah . (titik) dari URL
				$a = array_filter(explode('/', $a[0]));
			}
			if ($level == 1){
				$value = (array_shift(array_slice($a,0,1)) ?: DEFAULT_CONTOLLER); // controller
			}
			else if($level == 2){
				$value = (array_shift(array_slice($a,1,1)) ?: DEFAULT_METHOD) ; // method
			}
			else if($level === 3){
				$value = array_slice($a,2); // argument atau parameter
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
