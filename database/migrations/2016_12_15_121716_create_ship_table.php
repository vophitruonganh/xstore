<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ship', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('key', 65535);
			$table->float('price', 10, 0);
			$table->boolean('status')->default(0);
			$table->timestamp('start_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('end_date')->default(DB::raw('CURRENT_TIMESTAMP'));
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
		Schema::drop('ship');
	}

}
