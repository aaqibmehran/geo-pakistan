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
		Schema::create('world_divisions', function(Blueprint $table)
		{
			$table->bigIncrements('id')->comment('Auto Increase ID');
			$table->string('name', 190)->default('')->comment('Division Common Name');
			$table->string('abbr', 10)->nullable()->comment('Abbreviation');
			$table->string('capital', 190)->nullable()->comment('Capital Common Name');
			$table->string('area', 190)->nullable()->comment('Kilometer Square');
			$table->string('population', 190)->nullable()->comment('Census (2017-03-15)');
			$table->boolean('has_district')->default(0)->comment('Has District?');
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
		Schema::drop('world_divisions');
	}

}
