<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',32)->default("");
            $table->string('adress')->default("");            
            $table->Increments('phone_number')->default("");;            
            $table->string('massage')->default("");
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
        Schema::dropIfExists('management');
    }
}
