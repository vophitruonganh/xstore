<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToShipOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ship_order', function(Blueprint $table)
		{
			$table->foreign('order_id', 'order_ship')->references('id')->on('orders')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ship_id', 'ship_order')->references('id')->on('ship')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ship_order', function(Blueprint $table)
		{
			$table->dropForeign('order_ship');
			$table->dropForeign('ship_order');
		});
	}

}
