<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaCustomerMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ta_customer_meta', function(Blueprint $table)
		{
			$table->foreign('customer', 'fk_customer_meta')->references('id')->on('ta_customer')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ta_customer_meta', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_meta');
		});
	}

}
