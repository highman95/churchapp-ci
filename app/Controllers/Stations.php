<?php

namespace App\Controllers;

class Stations extends BaseController
{
	public function index()
	{
		return view('stations/index');
	}
}
