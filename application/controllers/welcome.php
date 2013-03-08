<?php

namespace application\controllers;
use system\libs\controller;
use system\libs\request;


class Welcome extends Controller
{ 

	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	function main()
	{
		$data['message']= __METHOD__;
		$data["link"] = array("<a href=/welcome/back.html>back</a>",
			"<a href=/welcome/test.html>test</a>");
		$this->load->view('main',$data);

		// echo "<pre>";
		// echo "__CLASS__          : ". __CLASS__ . "<br>";
		// echo "get_called_class() : ". get_called_class() . "<br>";
		// echo "get_parent_class() : ". get_parent_class() . "<br>";
		// echo "__METHOD__         : ". print_r(__METHOD__,1) ."</pre><hr>";
		
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

	function test()
	{
		
		$x = new Request;
		$x -> set_con(URI,1);
		$x -> set_met(URI,2);
		$x -> set_arg(URI,3);

		$args = $x->get_arg();

		if(!empty($args)){
			$data['hasil_pencarian'] = $args[0];
			$action = '../test.html';
		}else{
			$action = 'test.html';
		}
		if (isset($_GET['cari'])){
			$data['form'] = '<a href=\'/'.$x->get_con().'/'.$x->get_met().'/'.$_GET['cari'].'.html\'>hasil</a>';
		}
		else{
			$data['form'] = '
			<form method=GET action="'.$action.'">
			<input type=text id=cari name=cari value=\'masukkan\'>
			<input type=submit value=\'Hajar\'>
			</form>	';
		}
		$data['message']= __METHOD__ ;
		$this->load->view('test', $data);
	}
}