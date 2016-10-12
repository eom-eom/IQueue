<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorExpSpecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {
            schema::create('doctors_exp_spec', function(Blueprint $table){
                $table->bigIncrements('des_id');
                $table->bigInteger('doctor_id');
                $table->bigInteger('expertise_id');
                $table->bigInteger('specialization_id');
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
        Schema::drop('doctors_exp_spec');
    }
        
}




