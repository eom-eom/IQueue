<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsHospitalAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        schema::create('doctors_hospital_address', function(Blueprint $table){
            $table->bigIncrements('da_id');
            $table->bigInteger('hospital_id');
            $table->bigInteger('doctor_id');
            $table->bigInteger('doctor_scheds_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('doctors_hospital_address');
    }  //
    
}
