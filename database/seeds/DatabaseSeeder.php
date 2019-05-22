<?php

use Illuminate\Database\Seeder;
use App\Models\Region;
use App\Models\Departement;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$regions =[
    		'Dakar',
    		'Diourbel',
    		'Fatick',
    		'Kaffrine',
    		'Kaolack',
    		'Kédougou',
    		'Kolda',
    		'Louga',
    		'Matam',
    		'Saint-Louis',
    		'Sédhiou',
    		'Tambacounda',
    		'Thiès',
    		'Ziguinchor'
    	];

    	foreach ($regions as $region) {
    		Region::create(['code'=>strtoupper(mb_substr($region, 0, 3)),'nom' => $region]);
    	}
        // $this->call(UsersTableSeeder::class);
          factory(Departement::class, 50)->create();

    }
}
