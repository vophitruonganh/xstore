<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaShippingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ta_shipping', function(Blueprint $table)
		{
			$table->foreign('order', 'ta_shipping_ibfk_2')->references('id')->on('ta_order')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ta_shipping', function(Blueprint $table)
		{
			$table->dropForeign('ta_shipping_ibfk_1');
			$table->dropForeign('ta_shipping_ibfk_2');
		});
	}

}
