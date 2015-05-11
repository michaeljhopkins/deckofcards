<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('decks', function(Blueprint $table)
		{
			$table->increments('id');
            $table->unsignedInteger('table_id');
            $table->unsignedInteger('card_id');
            $table->integer('deck_num');
            $table->boolean('dealt')->default(0);
            $table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('decks');
	}

}
