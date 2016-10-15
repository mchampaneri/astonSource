<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'AdminAston',
            'slug' => 'adminAston-01',
            'email' => 'admin@aston.pro',
            'password' => bcrypt('1234'),
            'role' => '1'
        ]);
    }
}
