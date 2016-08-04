<?php

use Illuminate\Database\Seeder;

class users_db_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@aston.pro',
                'password' => bcrypt('1234'),
                'role'=>'admin',
                'status'=>'active',
             ],
            [
                'name' => 'hod1',
                'email' => 'hod1@aston.pro',
                'password' => bcrypt('1234'),
                'role'=>'hod',
                'status'=>'active',
            ],
            [
                'name' => 'student1',
                'email' => 'student1@aston.pro',
                'password' => bcrypt('1234'),
                'role'=>'student',
                'status'=>'active',
            ]]
        );
    }
}
