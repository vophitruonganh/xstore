<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductAttachmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_attachment', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('product_id')->nullable()->index('product_attachment');
			$table->integer('attachment_id')->nullable()->index('attachment_product');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_attachment');
	}

}
