<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaProductMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ta_product_meta', function(Blueprint $table)
		{
			$table->engine = 'innoDB';
			$table->integer('product')->index('fk_product_meta_id');
			$table->integer('id', true);
			$table->integer('meta_key');
			$table->text('meta_value', 65535)->nullable();
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
		Schema::drop('ta_product_meta');
	}

}
