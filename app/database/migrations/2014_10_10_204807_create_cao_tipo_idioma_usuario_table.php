<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoTipoIdiomaUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_tipo_idioma_usuario', function(Blueprint $table)
		{
			$table->integer('co_idioma', true);
			$table->string('ds_idioma', 13)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_tipo_idioma_usuario');
	}

}
