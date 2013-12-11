<?php

use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function($table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('post_id');
            $table->integer('comment_id');
            $table->text('text');
            $table->boolean('is_valid')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('comments');
    }
}
