<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorldDivisionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pakistan_divisions', function(Blueprint $table)
		{
			$table->bigIncrements('id')->comment('Auto Increase ID');
			$table->string('name', 190)->default('')->comment('Division Common Name');
			$table->string('abbr', 10)->nullable()->comment('Abbreviation');
			$table->string('capital', 190)->nullable()->comment('Capital Common Name');
			$table->string('area', 190)->nullable()->comment('Kilometer Square');
			$table->string('population', 190)->nullable()->comment('Census (2017-03-15)');
			$table->string('latitude', 50)->nullable()->comment('Latitude');
			$table->string('longitude', 50)->nullable()->comment('Longitude');
			$table->integer('map_zoom', 5)->nullable()->default(5)->comment('Longitude');
			$table->boolean('has_district')->default(0)->comment('Has District?');
            $table->boolean('status')->default(1)->comment('0:Inactive, 1:Active');
			$table->unique(['name'], 'uniq_division');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pakistan_divisions');
	}

}
