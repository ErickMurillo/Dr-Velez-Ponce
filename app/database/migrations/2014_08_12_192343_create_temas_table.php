<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('temas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titulo');
			$table->string('nombre');
			$table->string('contenido');
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
		Schema::drop('temas');
	}

}
