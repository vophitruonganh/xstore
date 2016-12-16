<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShipOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ship_order', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('ship_id')->index('ship_order');
			$table->integer('order_id')->index('order_ship');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ship_order');
	}

}
