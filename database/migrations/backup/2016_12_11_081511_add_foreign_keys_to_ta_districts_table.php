<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaDistrictsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ta_districts', function(Blueprint $table)
		{
			$table->foreign('province', 'ta_districts_ibfk_1')->references('id')->on('ta_provinces')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ta_districts', function(Blueprint $table)
		{
			$table->dropForeign('ta_districts_ibfk_1');
		});
	}

}
