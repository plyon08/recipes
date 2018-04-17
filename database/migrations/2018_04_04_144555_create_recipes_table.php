<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipes', function (Blueprint $table) {
			$table->increments('id')->autoIncrement();
			$table->string('recipeName');
			$table->string('ingredient1')->nullable();
			$table->string('ingredient2')->nullable();
			$table->string('ingredient3')->nullable();
			$table->string('ingredient4')->nullable();
			$table->string('ingredient5')->nullable();
			$table->string('ingredient6')->nullable();
			$table->string('ingredient7')->nullable();
			$table->string('ingredient8')->nullable();
			$table->string('ingredient9')->nullable();
			$table->string('ingredient10')->nullable();
			$table->string('ingredient11')->nullable();
			$table->string('ingredient12')->nullable();
			$table->string('ingredient13')->nullable();
			$table->string('ingredient14')->nullable();
			$table->string('ingredient15')->nullable();
			$table->text('instruction1')->nullable();
			$table->text('instruction2')->nullable();
			$table->text('instruction3')->nullable();
			$table->text('instruction4')->nullable();
			$table->text('instruction5')->nullable();
			$table->text('instruction6')->nullable();
			$table->text('instruction7')->nullable();
			$table->text('instruction8')->nullable();
			$table->text('instruction9')->nullable();
			$table->text('instruction10')->nullable();
			$table->text('instruction11')->nullable();
			$table->text('instruction12')->nullable();
			$table->text('instruction13')->nullable();
			$table->text('instruction14')->nullable();
			$table->text('instruction15')->nullable();
			$table->string('image')->nullable();
			$table->string('tag');
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
		Schema::dropIfExists('recipes');
	}
}
