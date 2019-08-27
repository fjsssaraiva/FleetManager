<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
			'name' => 'admin',
        	'email' => 'fs@mail.com',
        	'email_verified_at' => NOW(),
			'password' => bcrypt('admin'),
			'role' => 'admin',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
		\DB::table('users')->insert([
			'name' => 'fsaraiva',
        	'email' => 'fs1@mail.com',
        	'email_verified_at' => NOW(),
			'password' => bcrypt('user'),
			'role' => 'user',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}
