<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('authors')->insert([
			'first_name' => 'AAA',
        	'last_name' => 'Cars of brand AAA',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}
