<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ta_product', function(Blueprint $table)
		{
			$table->foreign('trademark', 'ta_product_ibfk_1')->references('id')->on('ta_trademark')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ta_product', function(Blueprint $table)
		{
			$table->dropForeign('ta_product_ibfk_1');
		});
	}

}
