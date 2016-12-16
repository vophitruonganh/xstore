<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaCustomerOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ta_customer_order', function(Blueprint $table)
		{
			$table->foreign('customer', 'fk_customer_order_id_customer_id')->references('id')->on('ta_customer')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('order', 'ta_customer_order_ibfk_1')->references('id')->on('ta_order')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ta_customer_order', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_order_id_customer_id');
			$table->dropForeign('ta_customer_order_ibfk_1');
		});
	}

}
