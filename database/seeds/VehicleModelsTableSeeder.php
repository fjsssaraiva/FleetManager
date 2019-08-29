<?php

use Illuminate\Database\Seeder;

class VehicleModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('vehicle_models')->insert([
			'title' => 'A1',
        	'photo' => '../pic.jpg',
        	'engine' => 'v8',
			'maxpower' => 500,
			'fuel' => 'diesel',
			'author_id' => 1,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('vehicle_models')->insert([
			'title' => 'A2',
        	'photo' => '../pic.jpg',
        	'engine' => 'v8',
			'maxpower' => 1500,
			'fuel' => 'diesel',
			'author_id' => 1,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
		\DB::table('vehicle_models')->insert([
			'title' => 'B1',
        	'photo' => '../pic.jpg',
        	'engine' => 'v6',
			'maxpower' => 500,
			'fuel' => 'gasoline',
			'author_id' => 2,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}
