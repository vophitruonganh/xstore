<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserPasswordResetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_password_resets', function(Blueprint $table)
		{
			$table->string('email')->index('ta_user_password_resets_user_email_index');
			$table->string('remember_token')->index('ta_user_password_resets_user_token_index');
			$table->dateTime('created_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_password_resets');
	}

}
