<?php

namespace application\controllers;
use system\libs\controller;


class Welcome extends Controller
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
		$data["link"] = array("<a href=/welcome/back.html>back</a>",
			"<a href=/welcome/test.html>test</a>");
		$this->load->view('utama',$data);
	}
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	function back()
	{
		$data['nama']='Welcome Back';
		$data['message']= __METHOD__;
 		$this->load->view('welcome',$data);
	}

	function test($_args = array())
	{
		$data['message']= __METHOD__ . $_args[0];
		$this->load->view('test', $data);
	}
}