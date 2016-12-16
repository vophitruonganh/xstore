<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name');
			$table->string('url');
			$table->float('price', 10, 0);
			$table->integer('count')->default(0);
			$table->boolean('sale')->default(0);
			$table->boolean('status')->default(0);
			$table->boolean('active')->default(0);
			$table->integer('trademark_id')->nullable()->index('fk_product_trademark_id');
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
		Schema::drop('products');
	}

}
