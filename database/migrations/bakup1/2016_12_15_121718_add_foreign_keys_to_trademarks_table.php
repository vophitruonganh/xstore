<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrademarksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trademarks', function(Blueprint $table)
		{
			$table->foreign('id', 'ta_trademark_product_relationship')->references('trademark_id')->on('products')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trademarks', function(Blueprint $table)
		{
			$table->dropForeign('ta_trademark_product_relationship');
		});
	}

}
