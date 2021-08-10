<?php

namespace App\Models;

use CodeIgniter\Model;

class Station extends Model
{
	protected $table = 'stations';

	protected $allowedFields = [
		'name',
	];
}
