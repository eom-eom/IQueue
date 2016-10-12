<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('doctors', function(Blueprint $table){
            $table->bigIncrements('doctor_id');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('middle_name',100)->nullable();
            $table->string('address_hos_id',10);
            $table->string('gender', 15);
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
        Schema::drop('doctors');
    }
}
