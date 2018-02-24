<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSafeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_safe', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->nullable(true);;
            $table->string('image', 250);
            $table->string('description', 400)->nullable(true);
            $table->string('type', 20)->default('thumb');
            $table->string('product', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_safe');
    }
}
