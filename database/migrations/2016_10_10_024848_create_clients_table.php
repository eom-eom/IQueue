<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('clients', function(Blueprint $table){
            $table->increments('client_id');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('middle_name',100)->nullable();
            $table->string('birth_date',10);
            $table->string('gender',15);
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
        Schema::drop('clients');
    }
}
