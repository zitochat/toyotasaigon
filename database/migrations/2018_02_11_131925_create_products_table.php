<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 100);
            $table->string('name', 100);
            $table->string('thumb', 300);
            $table->string('image', 300)->nullable(true);
            $table->string('price', 15);
            $table->string('description', 400);
            $table->string('parent', 100)->default('other');
            $table->string('show', 1)->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
