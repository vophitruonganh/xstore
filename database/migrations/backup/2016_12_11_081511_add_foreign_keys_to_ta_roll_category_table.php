<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaRollCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ta_roll_category', function(Blueprint $table)
		{
			$table->foreign('roll', 'ta_roll_category_ibfk_1')->references('id')->on('ta_roll')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ta_roll_category', function(Blueprint $table)
		{
			$table->dropForeign('ta_roll_category_ibfk_1');
		});
	}

}
