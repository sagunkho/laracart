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

class CreateLogWalletsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_wallets', function (Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('user_id')->unsigned();
			$table->integer('wallet_id')->unsigned();
			$table->double('balance', 25, 4);
			$table->enum('transaction', ['DEBIT', 'CREDIT']);
			$table->string('cause_entity');
			$table->integer('cause_entity_id');

			$table->timestamps();
			$table->softDeletes();

			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('wallet_id')->references('id')->on('wallets');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('log_wallets');
	}
}
