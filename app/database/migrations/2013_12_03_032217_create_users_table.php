<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function($table) {
            $table->increments('id');
            $table->string('email', 50)->unique();
            $table->string('name', 20)->unique();
            $table->string('password');
            $table->boolean('is_valid')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}
