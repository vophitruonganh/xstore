<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_order', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('customer')->index('fk_customer_order_id_customer_id');
			$table->integer('order')->index('fk_customer_order_id_order_id');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer_order');
	}

}
