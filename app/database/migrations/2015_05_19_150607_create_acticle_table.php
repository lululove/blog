<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActicleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('article', function (Blueprint $table) {
            $table->increments('article_id')->nullable();
            $table->string('article_title');
            $table->text('article_content');
            $table->integer('article_click')->unsigend()->default(100);
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->boolean('remember_token')->default(0);
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
        Schema::drop('article');
	}

}
