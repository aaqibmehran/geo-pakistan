<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePakistanProvincesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pakistan_provinces', function(Blueprint $table)
		{
			$table->bigIncrements('id')->comment('Auto Increase ID');
			$table->string('name', 190)->default('')->comment('Division Common Name');
			$table->string('abbr', 10)->nullable()->comment('Abbreviation');
			$table->string('capital', 190)->nullable()->comment('Capital Common Name');
            $table->string('population', 190)->nullable()->comment('Census (2017-03-15)');
            $table->string('area', 190)->nullable()->comment('Kilometer Square');
            $table->string('density', 190)->nullable()->comment('Per Kilometer Square');
			$table->string('latitude', 50)->nullable()->comment('Latitude');
			$table->string('longitude', 50)->nullable()->comment('Longitude');
            $table->integer('map_zoom')->nullable()->default(5)->comment('Zoom on Map');
			$table->unique(['name'], 'uniq_province');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pakistan_provinces');
	}

}
