<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ta_user', function(Blueprint $table)
		{
			$table->foreign('id', 'ta_user_ibfk_1')->references('user')->on('ta_user_meta')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('roll', 'ta_user_ibfk_2')->references('id')->on('ta_roll')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('district', 'ta_user_ibfk_3')->references('id')->on('ta_districts')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ta_user', function(Blueprint $table)
		{
			$table->dropForeign('ta_user_ibfk_1');
			$table->dropForeign('ta_user_ibfk_2');
			$table->dropForeign('ta_user_ibfk_3');
		});
	}

}
