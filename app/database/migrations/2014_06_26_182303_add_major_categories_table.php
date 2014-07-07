<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMajorCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('majorCategories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->string('imageName');
			$table->string('oTitle');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('majorCategories');
	}

}
