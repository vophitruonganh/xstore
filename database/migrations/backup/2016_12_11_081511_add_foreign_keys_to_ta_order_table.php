<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ta_order', function(Blueprint $table)
		{
			$table->foreign('user', 'ta_order_ibfk_1')->references('id')->on('ta_user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ta_order', function(Blueprint $table)
		{
			$table->dropForeign('ta_order_ibfk_1');
		});
	}

}
