<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorldContinentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pakistan_tehsils', function(Blueprint $table)
		{
			$table->bigIncrements('id')->comment('Auto increase ID');
            $table->bigInteger('district_id')->unsigned()->comment('District ID');
            $table->bigInteger('division_id')->unsigned()->comment('Division ID');
			$table->string('name', 50)->default('')->index('uniq_tehsil')->comment('Tehsil Name');
            $table->string('population', 190)->nullable()->comment('Census (2017-03-15)');
            $table->string('area', 190)->nullable()->comment('Census (2017-03-15)');
            $table->string('density', 190)->nullable()->comment('Census (2017-03-15)');
            $table->index(['district_id','division_id','name'], 'uniq_tehsil');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pakistan_tehsils');
	}

}