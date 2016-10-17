<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorSchedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('doctor_scheds', function(Blueprint $table){
            $table->bigIncrements('doctor_scheds_id');
            $table->string('ds_day', 100);
            $table->string('ds_time_from', 100);
            $table->string('ds_time_to', 100);
            $table->timestamps();
        });
    }

    /**
     * 
     */
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('doctor_scheds');
    }
}


