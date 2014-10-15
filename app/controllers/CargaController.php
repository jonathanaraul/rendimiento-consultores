<?php

class CargaController extends BaseController {

	/**
	 * Carga la vista Relatorio
	 *
	 *
	 * @return View Relatorio
	 */
	public function cargarRelatorio()
	{
		return View::make('site.data.relatorio');
	}

	/**
	 * Carga la vista Pizza
	 *
	 *
	 * @return View Pizza
	 */
	public function cargarPizza()
	{
		return View::make('site.data.pizza');
	}

}