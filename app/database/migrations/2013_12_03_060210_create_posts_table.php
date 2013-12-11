<?php

use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

    public function up()
    {
        Schema::create('posts', function($table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title', 50);
            $table->text('content');
            $table->boolean('is_valid')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('posts');
    }
}
