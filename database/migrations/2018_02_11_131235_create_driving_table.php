<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrivingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driving', function (Blueprint $table) {
            $table->increments('id');
            $table->string('website', 200)->nullable(true);
            $table->string('vehicles_datlich', 100);
            $table->string('id_tinhdatlich', 5);
            $table->string('name_datlich', 100);
            $table->string('idhuyen_datlich', 5);
            $table->string('email_datlich', 30);
            $table->string('phone_datlich', 11);
            $table->string('months_datlich', 2);
            $table->string('frmbaoduong', 20)->default('vlaithu');
            $table->string('ngaydatlich', 2);
            $table->string('description', 200);
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
        Schema::dropIfExists('driving');
    }
}
