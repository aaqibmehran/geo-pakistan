<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPakistanCitiesLocaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pakistan_cities_locale', function(Blueprint $table)
		{
			$table->foreign('tehsil_id', 'pakistan_cities_locale_ibfk_1')->references('id')->on('pakistan_cities')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pakistan_cities_locale', function(Blueprint $table)
		{
			$table->dropForeign('pakistan_cities_locale_ibfk_1');
		});
	}

}
