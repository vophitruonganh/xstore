<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrademarkExtendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trademark_extends', function(Blueprint $table)
		{
			$table->foreign('trademark_id', 'trademark_extends_ibfk_1')->references('id')->on('trademarks')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trademark_extends', function(Blueprint $table)
		{
			$table->dropForeign('trademark_extends_ibfk_1');
		});
	}

}
