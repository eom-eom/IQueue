<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('contacts', function(Blueprint $table){
            $table->bigIncrements('contact_id');
            $table->string('phone_no', 50);
            $table->string('mobile_no', 50);
            $table->string('email',100)->nullable();
            $table->string('fax',50);
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
        Schema::drop('contacts');
    }
}
