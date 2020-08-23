<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePakistanTehsilsLocaleTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakistan_tehsils_locale', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Auto increase ID');
            $table->bigInteger('tehsil_id')->unsigned()->comment('Tehsil ID');
            $table->string('name', 255)->nullable()->comment('Localized Name');
            $table->string('alias', 255)->nullable()->comment('Localized Alias');
            $table->string('abbr', 16)->nullable()->comment('Localized Abbr name');
            $table->string('full_name', 255)->nullable()->comment('Localized Fullname');
            $table->string('locale', 6)->nullable()->comment('Locale');
            $table->unique(['tehsil_id','locale'], 'uniq_tehsil_id_locale');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pakistan_tehsils_locale');
    }
}
