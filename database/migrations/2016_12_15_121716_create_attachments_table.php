<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttachmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attachments', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->index('attachment_user');
			$table->string('title');
			$table->string('url');
			$table->text('description', 65535)->nullable();
			$table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('mime_type', 100)->nullable();
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
		Schema::drop('attachments');
	}

}
