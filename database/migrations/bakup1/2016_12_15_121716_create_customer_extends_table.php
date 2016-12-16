<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerExtendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_extends', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('customer_id')->index('fk_customer_meta');
			$table->integer('meta_key')->nullable();
			$table->integer('meta_value')->nullable();
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
		Schema::drop('customer_extends');
	}

}
