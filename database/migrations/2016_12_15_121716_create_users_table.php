<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('firstname', 50)->nullable();
			$table->string('lastname', 50)->nullable();
			$table->date('dob');
			$table->string('address');
			$table->integer('district_id')->unsigned()->index('fk_destricts_user');
			$table->string('idcard', 9)->nullable();
			$table->string('email')->index('email');
			$table->string('password');
			$table->string('phone', 16)->nullable();
			$table->boolean('sex')->nullable();
			$table->boolean('status')->default(0);
			$table->boolean('active')->default(0);
			$table->integer('role_id')->default(4)->index('fk_user_roll');
			$table->string('remember_token', 100)->nullable();
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
		Schema::drop('users');
	}

}
