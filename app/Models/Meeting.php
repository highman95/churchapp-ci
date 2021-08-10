<?php

namespace App\Models;

use CodeIgniter\Model;

class Meeting extends Model
{
	protected $table = "meetings";
	protected $useTimestamps = true;

	protected $allowedFields = [
		'meeting_type_id',
		'station_id',
		'tag',
		'held_on',
	];
}
