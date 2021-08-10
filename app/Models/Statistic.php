<?php

namespace App\Models;

use CodeIgniter\Model;

class Statistic extends Model
{
	protected $table = "statistics";
	protected $useTimestamps = true;

	protected $allowedFields = [
		'meeting_id',
		'mno',
		'male',
		'female',
		'children',
		'converts',
		'first_timers',
		'testimonies',
		'tithe',
		'worship',
		'project',
		'shiloh_sac',
		'vow',
		'held_at',
	];
}
