<?php

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
            $table->increments('id')->index();
            $table->integer('role_id');
            $table->string('name');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('phone');
            $table->string('gender');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->integer('zip');
            $table->string('bio');
            $table->string('password');
            $table->string('path');
            $table->string('hash')->unique()->nullable();
            $table->integer('is_active')->default(0);
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
