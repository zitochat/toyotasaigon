<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('loai_xe', 150);
            $table->string('gia_xe', 15);
            $table->string('muc_phi', 15);
            $table->string('dang_ky', 15);
            $table->string('dang_kiem', 15);
            $table->string('duong_bo', 15);
            $table->string('bao_hiem', 15);
            $table->string('tong', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_data');
    }
}
