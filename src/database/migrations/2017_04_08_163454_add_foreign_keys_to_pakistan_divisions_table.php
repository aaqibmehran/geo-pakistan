<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPakistanDivisionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pakistan_divisions', function(Blueprint $table)
		{
			$table->foreign('province_id', 'pakistan_divisions_ibfk_1')->references('id')->on('pakistan_provinces')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pakistan_divisions', function(Blueprint $table)
		{
			$table->dropForeign('pakistan_divisions_ibfk_1');
		});
	}

}
