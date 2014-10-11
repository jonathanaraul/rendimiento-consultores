<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoEscalaRankingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_escala_ranking', function(Blueprint $table)
		{
			$table->boolean('idescala')->primary();
			$table->boolean('qtd_visual')->default(0);
			$table->integer('pontuacao')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_escala_ranking');
	}

}
