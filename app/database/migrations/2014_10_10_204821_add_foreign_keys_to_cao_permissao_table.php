<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCaoPermissaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cao_permissao', function(Blueprint $table)
		{
			$table->foreign('co_usuario', 'cao_permissao_ibfk_1')->references('co_usuario')->on('cao_usuario')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cao_permissao', function(Blueprint $table)
		{
			$table->dropForeign('co_usuario');
		});
	}

}
