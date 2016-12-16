<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrderProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('order_product', function(Blueprint $table)
		{
			$table->foreign('product_id', 'order_product_ibfk_1')->references('id')->on('products')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('order_id', 'order_product_ibfk_2')->references('id')->on('orders')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('order_product', function(Blueprint $table)
		{
			$table->dropForeign('order_product_ibfk_1');
			$table->dropForeign('order_product_ibfk_2');
		});
	}

}
