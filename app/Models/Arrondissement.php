<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arrondissement extends Model
{
	 protected $guarded =[];
	protected $primaryKey = 'code';

	public $incrementing = false;

	public function region()
	{
		return $this->belongsTo(Departement::class, 'departement_code');
	}
}
