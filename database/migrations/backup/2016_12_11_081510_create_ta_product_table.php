<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ta_product', function(Blueprint $table)
		{
			$table->engine = 'innoDB';
			$table->integer('id', true);
			$table->string('name');
			$table->string('url');
			$table->string('image');
			$table->float('price', 10, 0);
			$table->boolean('sale')->default(0);
			$table->boolean('status')->default(0);
			$table->boolean('active')->default(0);
			$table->integer('trademark')->nullable()->index('fk_product_trademark_id');
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
		Schema::drop('ta_product');
	}

}
