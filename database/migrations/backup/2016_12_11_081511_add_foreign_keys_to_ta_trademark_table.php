<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaTrademarkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ta_trademark', function(Blueprint $table)
		{
			$table->foreign('category', 'ta_trademark_ibfk_1')->references('id')->on('ta_category')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id', 'ta_trademark_ibfk_2')->references('trademark')->on('ta_trademark_meta')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ta_trademark', function(Blueprint $table)
		{
			$table->dropForeign('ta_trademark_ibfk_1');
			$table->dropForeign('ta_trademark_ibfk_2');
		});
	}

}
