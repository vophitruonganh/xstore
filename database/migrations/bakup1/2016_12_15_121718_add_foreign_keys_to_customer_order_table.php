<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomerOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('customer_order', function(Blueprint $table)
		{
			$table->foreign('order', 'customer_order_ibfk_1')->references('id')->on('orders')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('customer', 'fk_customer_order_id_customer_id')->references('id')->on('customer')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('customer_order', function(Blueprint $table)
		{
			$table->dropForeign('customer_order_ibfk_1');
			$table->dropForeign('fk_customer_order_id_customer_id');
		});
	}

}
