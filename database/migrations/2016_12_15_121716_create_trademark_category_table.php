<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrademarkCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trademark_category', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('trademark_id')->index('trademark_category');
			$table->integer('category_id')->index('category_trademark');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trademark_category');
	}

}
