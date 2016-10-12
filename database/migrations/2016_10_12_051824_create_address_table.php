<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('address', function(Blueprint $table){
            $table->bigIncrements('address_id');
            $table->string('unit_rmno_floor',100)->nullable();
            $table->string('building_name', 100)->nullable();
            $table->string('house_building_no', 100)->nullable();
            $table->string('subdivision_no', 100)->nullable();
            $table->string('region_code', 100);
            $table->string('province_code', 100);
            $table->string('municipality_code', 100);
            $table->string('barangay_code', 100);
            $table->string('zip_code', 30)->nullable();
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
        Schema::drop('address');
    }
}
