<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Se crea la tabla usuarios con sus campos
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('name',100);
			$table->string('username',100)->unique();
			$table->string('email',100)->unique();
			$table->string('password');
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
		//Eliminar la tabla usuarios
		Schema::drop('users');
	}

}
