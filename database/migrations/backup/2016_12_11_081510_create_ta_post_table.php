<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaPostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ta_post', function(Blueprint $table)
		{
			$table->engine = 'innoDB';
			$table->integer('id', true);
			$table->integer('product')->index('fk_post_product');
			$table->integer('category')->index('fk_post_category');
			$table->text('data', 65535);
			$table->boolean('active')->default(0);
			$table->dateTime('created_at')->nullable();
			$table->dateTime('updated_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ta_post');
	}

}
