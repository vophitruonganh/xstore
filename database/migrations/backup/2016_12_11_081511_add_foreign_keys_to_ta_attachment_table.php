<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaAttachmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ta_attachment', function(Blueprint $table)
		{
			$table->foreign('post', 'fk_attachment_post')->references('id')->on('ta_post')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('product', 'fk_attachment_product')->references('id')->on('ta_product')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ta_attachment', function(Blueprint $table)
		{
			$table->dropForeign('fk_attachment_post');
			$table->dropForeign('fk_attachment_product');
		});
	}

}
