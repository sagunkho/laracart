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

class CreateWishListTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wish_list', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('product_id')->unsigned();

			$table->timestamps();
			$table->softDeletes();

			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('product_id')->references('id')->on('products');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('wish_list');
	}
}
