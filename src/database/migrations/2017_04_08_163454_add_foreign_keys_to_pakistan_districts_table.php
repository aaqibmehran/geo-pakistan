<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPakistanDistrictsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pakistan_districts', function(Blueprint $table)
		{
			$table->foreign('division_id', 'pakistan_districts_ibfk_1')->references('id')->on('pakistan_divisions')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pakistan_districts', function(Blueprint $table)
		{
			$table->dropForeign('pakistan_districts_ibfk_1');
		});
	}

}
