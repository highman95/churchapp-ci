<?php

namespace App\Models;

use CodeIgniter\Model;

class Posting extends Model
{
	protected $table = 'postings';

	protected $allowedFields = [
		'user_id',
		'station_id',
		'posted_at',
		'serving',
	];
}
