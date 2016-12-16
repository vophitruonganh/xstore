<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrademarkExtendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trademark_extends', function(Blueprint $table)
		{
			$table->integer('id')->index('fk_trademark_meta_id');
			$table->integer('trademark_id', true);
			$table->string('meta_key', 150);
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
		Schema::drop('trademark_extends');
	}

}
