<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('patients', function(Blueprint $table){
            $table->bigIncrements('patient_id');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('middle_name',100)->nullable();
            $table->string('birth_date',15);
            $table->string('gender', 15);
            $table->string('age');
            $table->bigInteger('address_id')->nullable();
            $table->bigInteger('contact_id')->nullable();
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
        Schema::drop('patients');
    }
}
