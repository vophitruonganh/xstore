<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrademarkCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trademark_category', function(Blueprint $table)
		{
			$table->foreign('category_id', 'category_trademark')->references('id')->on('category')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('trademark_id', 'trademark_category')->references('id')->on('trademarks')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trademark_category', function(Blueprint $table)
		{
			$table->dropForeign('category_trademark');
			$table->dropForeign('trademark_category');
		});
	}

}
