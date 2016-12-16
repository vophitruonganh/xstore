<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrademarksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trademarks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('category_id')->index('fk_trademark_category_id');
			$table->string('name');
			$table->string('url');
			$table->string('image');
			$table->boolean('active')->default(0);
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
		Schema::drop('trademarks');
	}

}
