<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaAttachmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ta_attachment', function(Blueprint $table)
		{
			$table->engine = 'innoDB';
			$table->integer('id', true);
			$table->string('title');
			$table->string('url');
			$table->text('description', 65535)->nullable();
			$table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('type', 20)->nullable();
			$table->string('mime_type', 100)->nullable();
			$table->integer('category')->index('fk_attachment_category');
			$table->integer('product')->index('fk_attachment_product');
			$table->integer('post')->index('fk_attachment_post');
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
		Schema::drop('ta_attachment');
	}

}
