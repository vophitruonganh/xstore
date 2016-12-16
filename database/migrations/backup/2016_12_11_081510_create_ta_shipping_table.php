<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaShippingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ta_shipping', function(Blueprint $table)
		{
			$table->engine = 'innoDB';
			$table->integer('id', true);
			$table->integer('category')->index('category');
			$table->text('key', 65535);
			$table->float('price', 10, 0);
			$table->boolean('status')->default(0);
			$table->boolean('active')->default(0);
			$table->timestamp('start_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('end_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('order')->index('fk_ship_order');
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
		Schema::drop('ta_shipping');
	}

}
