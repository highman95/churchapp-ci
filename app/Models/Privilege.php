<?php

namespace App\Models;

use CodeIgniter\Model;

class Privilege extends Model
{
	protected $table = 'privileges';

	protected $allowedFields = [
		'posting_user_id',
		'posting_station_id',
		'task_id',
	];
}
