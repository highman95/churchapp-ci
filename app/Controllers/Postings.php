<?php

namespace App\Controllers;

class Postings extends BaseController
{
	public function index()
	{
		return view('postings/index');
	}
}
