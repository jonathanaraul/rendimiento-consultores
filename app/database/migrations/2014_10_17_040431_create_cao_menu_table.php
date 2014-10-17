<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_menu', function(Blueprint $table)
		{
			$table->boolean('co_menu')->primary();
			$table->string('ds_menu')->default('');
			$table->string('ds_pagina')->default('');
			$table->string('ds_imagem')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_menu');
	}

}
