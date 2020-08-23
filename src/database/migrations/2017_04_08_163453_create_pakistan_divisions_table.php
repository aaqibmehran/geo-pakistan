<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePakistanDivisionsTable extends Migration {

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
            $table->bigInteger('province_id')->unsigned()->comment('Province ID');
			$table->string('name', 190)->default('')->comment('Division Common Name');
			$table->string('capital', 190)->nullable()->comment('Capital Common Name');
			$table->string('area', 190)->nullable()->comment('Kilometer Square');
			$table->string('population', 190)->nullable()->comment('Census (2017-03-15)');
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
