<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaProductMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ta_product_meta', function(Blueprint $table)
		{
			$table->foreign('product', 'ta_product_meta_ibfk_1')->references('id')->on('ta_product')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ta_product_meta', function(Blueprint $table)
		{
			$table->dropForeign('ta_product_meta_ibfk_1');
		});
	}

}
