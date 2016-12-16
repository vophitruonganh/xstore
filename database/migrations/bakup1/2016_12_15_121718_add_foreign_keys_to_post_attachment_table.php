<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPostAttachmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('post_attachment', function(Blueprint $table)
		{
			$table->foreign('post_id', 'attachment_post')->references('id')->on('posts')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('attachment_id', 'post_attachment')->references('id')->on('attachments')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('post_attachment', function(Blueprint $table)
		{
			$table->dropForeign('attachment_post');
			$table->dropForeign('post_attachment');
		});
	}

}
