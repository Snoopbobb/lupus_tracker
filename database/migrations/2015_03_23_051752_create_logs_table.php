<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logs', function(Blueprint $table)
		{
			$table->increments('log_id');
			$table->tinyInteger('flare');
			$table->tinyInteger('fatigue');
			$table->tinyInteger('headache');
			$table->tinyInteger('swelling');
			$table->tinyInteger('rash');
			$table->tinyInteger('joint_pain');
			$table->tinyInteger('sleep');
			$table->tinyInteger('excercise');
			$table->text('notation');
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
		Schema::drop('logs');
	}

}
