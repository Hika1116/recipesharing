<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categoryinfo', function(Blueprint $table)
		{
			$table->integer('recipe_id')->unsigned();
			$table->bigInteger('categorycontrol_id')->unsigned()->default(0);
			$table->integer('category_id')->unsigned()->default(0);
			$table->string('category_name', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categoryinfo');
	}

}
