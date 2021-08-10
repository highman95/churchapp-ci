<?php

namespace App\Controllers;

use App\Models\Meeting;
use App\Models\MeetingType;
use App\Models\Station;

class Meetings extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Meetings',
			'locations' => (new Station)->findAll(),
			'meetingTypes' => (new MeetingType)->findAll(),
		];

		return view('meetings/index', $data);
	}

	public function view($page = 1, $chunk = 10)
	{
		$data = [
			'title' => 'Meeting Information',
			'meetings' => (new Meeting)->findAll($chunk, abs($chunk * ($page - 1))),
		];

		return view('meetings/view', $data);
	}
}
