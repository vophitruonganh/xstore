<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ta_customer', function(Blueprint $table)
		{
			$table->engine = 'innoDB';
			$table->integer('id', true);
			$table->string('firstname', 50)->nullable();
			$table->string('lastname', 50)->nullable();
			$table->date('dob');
			$table->string('address');
			$table->string('idcard', 9)->nullable();
			$table->string('email');
			$table->string('password');
			$table->string('phone', 24)->nullable();
			$table->boolean('sex')->nullable();
			$table->boolean('status')->default(0);
			$table->boolean('active')->default(0);
			$table->integer('roll_id')->index('fk_user_roll');
			$table->string('remember_token')->nullable();
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
		Schema::drop('ta_customer');
	}

}
