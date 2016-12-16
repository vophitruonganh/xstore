<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsExtendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products_extends', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('product_id')->index('fk_product_meta_id');
			$table->integer('meta_key');
			$table->text('meta_value', 65535)->nullable();
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
		Schema::drop('products_extends');
	}

}
