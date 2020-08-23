<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePakistanDistrictsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pakistan_districts', function(Blueprint $table)
		{
			$table->bigIncrements('id')->comment('Auto increase ID');
            $table->bigInteger('province_id')->unsigned()->comment('Province ID');
            $table->bigInteger('division_id')->unsigned()->comment('Division ID');
			$table->string('name', 190)->default('')->comment('District Common Name');
			$table->string('center', 190)->nullable()->comment('Center City Common Name');
			$table->string('population', 190)->nullable()->comment('Census (2017-03-15)');
			$table->string('area', 190)->nullable()->comment('Kilometer Square');
			$table->string('density', 190)->nullable()->comment('Per Kilometer Square');
			$table->string('latitude', 190)->nullable()->comment('Latitude');
			$table->string('longitude', 190)->nullable()->comment('Longitude');
            $table->integer('map_zoom')->nullable()->default(5)->comment('Zoom on Map');
			$table->unique(['province_id', 'division_id','name'], 'uniq_district');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pakistan_districts');
	}

}
