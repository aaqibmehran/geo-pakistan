<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorldCountriesTable extends Migration {

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
            $table->bigInteger('division_id')->unsigned()->comment('Division ID');
			$table->string('name', 190)->default('')->comment('District Common Name');
			$table->string('center', 190)->nullable()->comment('Center City Common Name');
			$table->string('population', 190)->nullable()->comment('Census (2017-03-15)');
			$table->string('area', 190)->nullable()->comment('Kilometer Square');
			$table->string('density', 190)->nullable()->comment('Kilometer Square');
            $table->boolean('has_tehsil')->default(0)->comment('Has Tehsil?');
			$table->unique(['division_id','name'], 'uniq_district');
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
