<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaAttachmentUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ta_attachment_user', function(Blueprint $table)
		{
			$table->foreign('user', 'fk_attachment_user')->references('id')->on('ta_user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('attachment', 'fk_user_attachment')->references('id')->on('ta_attachment')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ta_attachment_user', function(Blueprint $table)
		{
			$table->dropForeign('fk_attachment_user');
			$table->dropForeign('fk_user_attachment');
		});
	}

}
