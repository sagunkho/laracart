<?php
/**
 *
 *	 _____
 *	/  ___|
 *	\ `--.__  ___   _ ____
 *	 `--. \ \/ / | | |_  /
 *	/\__/ />  <| |_| |/ /
 *	\____//_/\_\\__, /___|
 *				 __/ |
 *				|___/
 *
 * Copyright (c) 2019 sagunxp@gmail.com.
 * This file is a part of a Sxyz Project.
 * Unauthorized access, modification or distribution is not allowed.
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id')->unsigned();
			$table->string('name');
			$table->string('description');
			$table->string('entity')->nullable()->default(null);
			$table->integer('entity_id')->unsigned()->default(0);
			$table->string('entity_data')->nullable()->default(null);
			$table->string('image');
			$table->enum('image_type', ['PATH', 'URL'])->default('PATH');
			$table->float('discount_rate', 15, 4)->default(0.00);
			$table->float('rating', 15, 4)->default(0.00);

			$table->timestamps();
			$table->softDeletes();

			$table->foreign('category_id')->references('id')->on('product_categories');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$schema->dropIfExists('products');
	}
}
