<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaTrademarkMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ta_trademark_meta', function(Blueprint $table)
		{
			$table->engine = 'innoDB';
			$table->integer('id')->index('fk_trademark_meta_id');
			$table->integer('trademark', true);
			$table->string('meta_key', 150);
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
		Schema::drop('ta_trademark_meta');
	}

}
