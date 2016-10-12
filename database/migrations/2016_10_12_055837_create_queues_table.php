<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('queues', function(Blueprint $table){
            $table->bigIncrements('queue_id');
            $table->bigInteger('patient_id');
            $table->string('queue_no');
            $table->bigInteger('doctor_id');
            $table->string('created_at', 100);
            $table->string('status', 100);
            $table->string('time_rendered', 100);
            $table->bigInteger('qs_id');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('queues');
    }
}









