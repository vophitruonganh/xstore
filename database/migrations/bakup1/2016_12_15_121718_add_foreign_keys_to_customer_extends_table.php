<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomerExtendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('customer_extends', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_customer_meta')->references('id')->on('customer')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('customer_extends', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_meta');
		});
	}

}
