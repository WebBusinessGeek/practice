<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			
			$table->string('title');
			$table->string('oTitle');
			$table->string('subTitle');
			$table->text('body');
			$table->enum('contentType', array('What','Application','HowTo','Inspiration','Resources') );
			$table->enum('howToLifecycle', array('Research','Planning','Construction','Launch','Growth','None') );
			$table->integer('user_id');
			$table->integer('minorCat_id');
			$table->boolean('is_published');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
