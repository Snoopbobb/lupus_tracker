<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userlogs', function(Blueprint $table)
		{
			$table->integer('user_id')->references('user_id')->on('users');
			$table->integer('log_id')->references('log_id')->on('logs');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userlogs');
	}

}
