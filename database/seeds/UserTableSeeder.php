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
            'email' => 'admin@aston.pro',
            'password' => bcrypt('1234'),
            'role' => 'admin'
        ]);
    }
}
