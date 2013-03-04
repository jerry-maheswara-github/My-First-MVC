<?php

namespace system\libs; 

class Request{
	
	private $_controller;
	private $_method;
	// private $_args;
	// //////////////////////////////////////////////////////////////////////////
	// //////////////////////////////////////////////////////////////////////////
	// //////////////////////////////////////////////////////////////////////////
	// public function __construct(){

	// 	// $parts = explode('/', URL);
	// 	// $parts = array_filter($parts);

	// 	// echo "<pre>".print_r($parts,1) ."</pre>";
	// 	// $this->_controller = ($c = array_shift($parts))? $c : 'index';
	// 	// $this->_method     = ($c = array_shift($parts))? $c : 'main';
	// 	// $this->_args       = (isset($parts[0])) ? $parts :  array();
 
	// }



	protected $members = array();

    public function __get($arg) {
        if (array_key_exists($arg, $this->members)) {
        	echo 'Getting'.BR;
            return ($this->members[$arg]);
        } else { return ("No such luck!\n"); }
    }

    public function __set($key, $val) {
        $this->members[$key] = $val;
    }


    // public function __isset($arg) {
    //     return (isset($this->members[$arg]));
    // }
 









	public function setController($parts, $arg='index'){
		if (isset($parts)){
			$a = explode('/', Dispatcher::getURI());
			$value = array_shift(array_slice($a,1,1));
			if (empty($value)){
				$this->_controller = $arg;
			}
			else{
				$this->_controller = $value;
			} 
		}
	}


	public function setMethod($parts, $arg='main'){
		if (isset($parts)){
			$a = explode('/', Dispatcher::getURI());
			$value = array_shift(array_slice($a,2,1));
			if (empty($value)){
				$this->_method = $arg;
			}
			else{
				$this->_method = $value;
			} 
		}
	}

	// public function setArgs($arg=''){
	// 	$this->_args = $arg;
	// }


	// //////////////////////////////////////////////////////////////////////////
	// //////////////////////////////////////////////////////////////////////////
	// //////////////////////////////////////////////////////////////////////////
	public function getController(){
		return $this->_controller;
	}
	// //////////////////////////////////////////////////////////////////////////
	// //////////////////////////////////////////////////////////////////////////
	// //////////////////////////////////////////////////////////////////////////
	public function getMethod(){
		return $this->_method;
	}
	// //////////////////////////////////////////////////////////////////////////
	// //////////////////////////////////////////////////////////////////////////
	// //////////////////////////////////////////////////////////////////////////
	// public function getArgs(){
	// 	return $this->_args;
	// }
 
}
