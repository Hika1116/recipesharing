<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('materialinfo', function(Blueprint $table)
		{
			$table->integer('recipe_id')->unsigned();
			$table->integer('materialcontrol_id')->unsigned()->default(0);
			$table->string('amount');
			$table->integer('material_id')->unsigned()->default(0);
			$table->string('material_name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('materialinfo');
	}

}
