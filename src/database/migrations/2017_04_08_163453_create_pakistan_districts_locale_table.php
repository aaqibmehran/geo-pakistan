<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePakistanDistrictsLocaleTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakistan_districts_locale', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Auto increase ID');
            $table->bigInteger('district_id')->unsigned()->comment('District ID');
            $table->string('name', 255)->default('')->comment('Localized District Name');
            $table->string('alias', 255)->nullable()->comment('Localized District Alias');
            $table->string('abbr', 16)->nullable()->comment('Localized District Abbr Name');
            $table->string('full_name', 255)->nullable()->comment('Localized District Fullname');
            $table->string('currency_name', 255)->nullable()->comment('Localized District Currency Name');
            $table->string('locale', 6)->nullable()->comment('locale');
            $table->unique(['district_id','locale'], 'uniq_district_id_locale');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pakistan_districts_locale');
    }
}
