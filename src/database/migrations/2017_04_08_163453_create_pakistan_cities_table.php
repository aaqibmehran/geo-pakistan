<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorldCitiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakistan_cities', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Auto increase ID');
            $table->bigInteger('tehsil_id')->unsigned()->comment('Tehsil ID');
            $table->bigInteger('district_id')->unsigned()->comment('District ID');
            $table->bigInteger('division_id')->unsigned()->index('division_id')->comment('Division ID');
            $table->string('name', 255)->default('')->comment('City Name');
            $table->string('full_name', 255)->nullable()->comment('City Fullname');
            $table->string('population', 190)->nullable()->comment('Census (2017-03-15)');
            $table->index(['tehsil_id', 'district_id','division_id','name'], 'uniq_city');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('world_cities');
    }
}
