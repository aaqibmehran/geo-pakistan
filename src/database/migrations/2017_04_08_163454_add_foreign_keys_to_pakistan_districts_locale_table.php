<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPakistanDistrictsLocaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pakistan_districts_locale', function(Blueprint $table)
		{
			$table->foreign('district_id', 'pakistan_districts_locale_ibfk_1')->references('id')->on('pakistan_districts')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pakistan_districts_locale', function(Blueprint $table)
		{
			$table->dropForeign('pakistan_districts_locale_ibfk_1');
		});
	}

}
