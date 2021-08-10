<?php

namespace App\Models;

use CodeIgniter\Model;

class Organization extends Model
{
	protected $table = 'organizations';

	protected $allowedFields = [
		'name',
		'founded_on',
	];
}
