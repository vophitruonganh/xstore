<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaUserMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ta_user_meta', function(Blueprint $table)
		{
			$table->engine = 'innoDB';
			$table->integer('user')->index('fk_user_meta_id');
			$table->integer('id', true);
			$table->string('meta_key', 150)->nullable();
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
		Schema::drop('ta_user_meta');
	}

}
