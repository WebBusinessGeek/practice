<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MinorCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('minorCategories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->string('imageName');
			$table->integer('major_id');
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
		Schema::drop('minorCategories');
	}

}
