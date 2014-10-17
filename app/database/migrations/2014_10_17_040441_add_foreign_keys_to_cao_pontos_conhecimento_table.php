<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCaoPontosConhecimentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cao_pontos_conhecimento', function(Blueprint $table)
		{
			$table->foreign('pontuacao', 'cao_pontos_conhecimento_ibfk_1')->references('idescala')->on('cao_escala_ranking')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('co_coordenador', 'cao_pontos_conhecimento_ibfk_2')->references('co_usuario')->on('cao_usuario')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('idconhecimento', 'cao_pontos_conhecimento_ibfk_3')->references('idconhecimento')->on('cao_conhecimentos')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cao_pontos_conhecimento', function(Blueprint $table)
		{
			$table->dropForeign('pontuacao');
			$table->dropForeign('co_coordenador');
			$table->dropForeign('idconhecimento');
		});
	}

}
