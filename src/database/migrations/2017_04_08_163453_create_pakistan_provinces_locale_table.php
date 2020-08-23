<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePakistanProvincesLocaleTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakistan_provinces_locale', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Auto Increase ID');
            $table->bigInteger('province_id')->unsigned()->comment('Province ID');
            $table->string('name', 255)->default('')->comment('Localized Province Name');
            $table->string('abbr', 16)->nullable()->comment('Localized Province Abbr');
            $table->string('alias', 255)->nullable()->comment('Localized Province Alias');
            $table->string('full_name', 255)->nullable()->comment('Localized Province Fullname');
            $table->string('locale')->nullable()->comment('locale');
            $table->unique(['province_id','locale'], 'uniq_province_id_locale');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pakistan_provinces_locale');
    }
}
