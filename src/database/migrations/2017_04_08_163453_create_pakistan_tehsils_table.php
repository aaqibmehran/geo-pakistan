<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePakistanTehsilsTable extends Migration {

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
            $table->bigInteger('province_id')->unsigned()->comment('Province ID');
            $table->bigInteger('division_id')->unsigned()->comment('Division ID');
            $table->bigInteger('district_id')->unsigned()->comment('District ID');
			$table->string('name', 50)->default('')->comment('Tehsil Name');
            $table->string('population', 190)->nullable()->comment('Census (2017-03-15)');
            $table->string('area', 190)->nullable()->comment('Kilometer Square');
            $table->string('density', 190)->nullable()->comment('Per Kilometer Square');
            $table->index(['district_id','division_id', 'province_id','name'], 'uniq_tehsil');
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
