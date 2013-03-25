<?php

namespace application\controllers;
use system\libs\controller;
use system\libs\request;
use system\config\header;


class Index extends Controller
{ 
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	function main()
	{
		// new HelperHTML;
		// echo "<pre>";
		// echo "__CLASS__          : ". __CLASS__ . "<br>";
		// echo "get_called_class() : ". get_called_class() . "<br>";
		// echo "get_parent_class() : ". get_parent_class() . "<br>";
		// echo "__METHOD__         : ". print_r(__METHOD__,1) ."</pre><hr>";
		$data['message']= __METHOD__;
		// $data['link'] = "<a href=index.html>Index</a>";
		$data['gambar'] = $this->html->img('me.jpg');
		
		// array(
		// 	  $this->html->anchor(ABS.'/index', 'Index')
		// 	, $this->html->anchor(ABS.'/index/welcome', '/index/welcome')
		// 	, $this->html->anchor(ABS.'/index/welcome/back', '/index/welcome/back')
		// 	, $this->html->anchor(ABS.'/index/welcome/back/space', '/index/welcome/back/space')
		// 	, $this->html->anchor(ABS.'/index/welcome/back/space/invander', '/index/welcome/back/space/invander')
		// 	, $this->html->anchor(ABS.'/welcome', '/welcome')
		// 	, $this->html->anchor(ABS.'/welcome/index', '/welcome/index')
		// 	);



		$this->load->view('main', $data);
		// $this->load->helper('Helperhtml');
		// $this->Helperhtml->img('me.jpg');
	}
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	function welcome()
	{
		$data['gambar'] = $this->html->img('me.jpg');
		$key = "gimana ya";
		$data['header']= '\''.__FUNCTION__.'\' sebagai Method';
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