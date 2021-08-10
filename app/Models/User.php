<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
	protected $table = "users";
	protected $useTimestamps = true;

	protected $allowedFields = [
		'title',
		'first_name',
		'last_name',
		'phone',
		'email',
		'password',
	];
}
