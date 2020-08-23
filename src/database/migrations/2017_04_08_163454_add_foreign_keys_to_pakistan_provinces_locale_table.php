<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class
AddForeignKeysToPakistanProvincesLocaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pakistan_provinces_locale', function(Blueprint $table)
		{
			$table->foreign('province_id', 'pakistan_provinces_locale_ibfk_1')->references('id')->on('pakistan_provinces')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pakistan_provinces_locale', function(Blueprint $table)
		{
			$table->dropForeign('pakistan_provinces_locale_ibfk_1');
		});
	}

}
