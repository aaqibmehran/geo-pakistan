<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPakistanCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pakistan_cities', function(Blueprint $table)
		{
			$table->foreign('tehsil_id', 'pakistan_cities_ibfk_1')->references('id')->on('pakistan_tehsils')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('district_id', 'pakistan_cities_ibfk_2')->references('id')->on('pakistan_districts')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('division_id', 'pakistan_cities_ibfk_3')->references('id')->on('pakistan_divisions')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pakistan_cities', function(Blueprint $table)
		{
			$table->dropForeign('pakistan_cities_ibfk_1');
			$table->dropForeign('pakistan_cities_ibfk_2');
			$table->dropForeign('pakistan_cities_ibfk_3');
		});
	}

}
