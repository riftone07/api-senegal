<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
	 protected $guarded =[];
	protected $primaryKey = 'code';

	public $incrementing = false;

	public function region()
	{
		return $this->belongsTo(Region::class, 'region_code');
	}

	public function arrondissements()
	{
		return $this->hasMany(Departement::class, 'region_code');
	}
	public function communes()
	{
		return $this->hasMany(Departement::class, 'region_code');
	}
}
