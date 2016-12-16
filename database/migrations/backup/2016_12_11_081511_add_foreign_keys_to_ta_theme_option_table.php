<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaThemeOptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ta_theme_option', function(Blueprint $table)
		{
			$table->foreign('site', 'ta_theme_option_ibfk_1')->references('id')->on('ta_site_option')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ta_theme_option', function(Blueprint $table)
		{
			$table->dropForeign('ta_theme_option_ibfk_1');
		});
	}

}
