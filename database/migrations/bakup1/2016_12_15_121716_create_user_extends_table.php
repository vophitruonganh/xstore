<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserExtendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_extends', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->index('fk_user_meta_id');
			$table->string('meta_key', 150)->nullable();
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
		Schema::drop('user_extends');
	}

}
