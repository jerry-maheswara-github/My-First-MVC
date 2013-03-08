<?php

namespace application\controllers;
use system\libs\controller;
use system\libs\request;


class Index extends Controller
{ 
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	function main()
	{
		// echo "<pre>";
		// echo "__CLASS__          : ". __CLASS__ . "<br>";
		// echo "get_called_class() : ". get_called_class() . "<br>";
		// echo "get_parent_class() : ". get_parent_class() . "<br>";
		// echo "__METHOD__         : ". print_r(__METHOD__,1) ."</pre><hr>";
		$data['message']= __METHOD__;
		// $data['link'] = "<a href=index.html>Index</a>";

		$this->load->view('main', $data);
	}
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	function welcome()
	{
		$key = "gimana ya";
		$data['header']='\'welcome\' sebagai Method';
		$data['kunci']=$key;
		$data['param']=$url[3];
		$data['message']= __METHOD__;

		$x = new Request;
		$x -> set_arg(URI,3);
		$_args = $x->arg;

		$data['arg'] = $_args ;// . $_GET[nama];

		// eksekusi disini
 		$this->load->view('welcome',$data);

	}
}