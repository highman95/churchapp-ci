<?php

namespace App\Models;

use App\Entities\Audit as AuditEntity;
use CodeIgniter\Model;

class Audit extends Model
{
	protected $table = 'audits';
	protected $returnType = AuditEntity::class;

	protected $allowedFields = [
		'action',
		'actor',
		'url',
		'data',
		'organization_id',
	];
}
