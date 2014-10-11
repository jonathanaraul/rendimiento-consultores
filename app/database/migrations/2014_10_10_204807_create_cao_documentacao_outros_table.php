<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoDocumentacaoOutrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_documentacao_outros', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome', 70)->default('');
			$table->integer('co_sistema')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_documentacao_outros');
	}

}
