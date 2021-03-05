<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home/index');
	}

	public function detail()
	{
		return view('home/detail');
	}

	public function detail2()
	{
		return view('home/detail2');
	}

	//--------------------------------------------------------------------

}
