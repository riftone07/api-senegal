<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Departement;
use App\Models\Region;
use Faker\Generator as Faker;

use Illuminate\Support\Str;

$factory->define(Departement::class, function (Faker $faker) {
	$word = $faker->unique()->word;
	return [
		'nom' => $word,
		'region_code' => function ()
		{
			return Region::all()->random();
		},
		'code' => Str::random(4)
	];
});
