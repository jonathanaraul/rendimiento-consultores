<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCaoSalarioPagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cao_salario_pag', function(Blueprint $table)
		{
			$table->foreign('co_usuario', 'cao_salario_pag_ibfk_1')->references('co_usuario')->on('cao_usuario')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cao_salario_pag', function(Blueprint $table)
		{
			$table->dropForeign('co_usuario');
		});
	}

}
