<?php

namespace system\libs;

class Model
{
	public function foo()
  {
    echo __METHOD__ . PHP_EOL;
  }

	
  public function __call($method, $args)
  {
    if(method_exists($this, $method))
    {
			$this->$method();
			echo __METHOD__ . PHP_EOL;
    }
    else
    {
    	echo "<hr>$method belum terdaftar sebagai fungsi / method";
    }
  }

  // public static function __callStatic($name, $arguments)
  // {
  //   return implode(', ', $arguments);
  // }

  public function dispatch($method)
	{ 
			return $method; // nah fungsi dipanggil disini 
	}
}