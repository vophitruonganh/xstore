<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaCategoryMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ta_category_meta', function(Blueprint $table)
		{
			$table->foreign('category', 'fk_category_meta_id')->references('id')->on('ta_category')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ta_category_meta', function(Blueprint $table)
		{
			$table->dropForeign('fk_category_meta_id');
		});
	}

}
