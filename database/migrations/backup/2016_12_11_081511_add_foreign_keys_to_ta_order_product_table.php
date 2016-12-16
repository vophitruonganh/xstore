<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaOrderProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ta_order_product', function(Blueprint $table)
		{
			$table->foreign('product', 'ta_order_product_ibfk_1')->references('id')->on('ta_product')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('order', 'ta_order_product_ibfk_2')->references('id')->on('ta_order')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ta_order_product', function(Blueprint $table)
		{
			$table->dropForeign('ta_order_product_ibfk_1');
			$table->dropForeign('ta_order_product_ibfk_2');
		});
	}

}
