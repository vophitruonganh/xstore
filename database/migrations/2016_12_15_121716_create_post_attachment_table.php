<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostAttachmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post_attachment', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('post_id')->index('attachment_post');
			$table->integer('attachment_id')->index('post_attachment');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('post_attachment');
	}

}
