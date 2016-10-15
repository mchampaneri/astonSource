<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            
            $table->TinyInteger('state')->default(0);

            $table->string('name');
            $table->string('slug');
            $table->string('email')->unique();
            $table->string('password');

            $table->integer('department_id')->default(0);
            $table->integer('sem')->default(0);



            $table->integer('role');
            // 1. Admin 2. Hod 3.Faculty 4.Student


            $table->string('contact_no')->nullable();
            $table->string('address')->nullable();
            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
