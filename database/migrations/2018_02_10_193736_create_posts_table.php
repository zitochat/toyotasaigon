<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id', 20);
            $table->string('slug', 300);
            $table->string('name', 300);
            $table->string('thumb', 300)->nullable(true);
            $table->text('content');
            $table->string('status',20);
            $table->integer('user_id')->default(1);
            $table->string('parent', 200)->default('dich-vu');
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
        Schema::dropIfExists('posts');
    }
}
