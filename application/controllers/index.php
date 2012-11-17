<?php

namespace application\controllers;
use system\core\controller;


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

		$this->load->view('utama', $data);
	}
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	function welcome()
	{
		$key = "gimana ya";
		$data['nama']='Jerry Maheswara';
		$data['kunci']=$key;
		$data['param']=$url[3];
		$data['message']= __METHOD__;

		/////eksekusi disini
 		$this->load->view('welcome',$data);

	}
}