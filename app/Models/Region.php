<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
	 protected $guarded =[];
	protected $primaryKey = 'code';

	public $incrementing = false;

	public function departements()
	{
		return $this->hasMany(Departement::class, 'region_code');
	}
}
