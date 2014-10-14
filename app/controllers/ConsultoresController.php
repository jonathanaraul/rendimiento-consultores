<?php

class ConsultoresController extends BaseController {

	/**
	 * Display a list of the of the consultors.
	 *
	 *
	 * @return Consultors
	 */
	public function getConsultors()
	{

		$consultores = Consultor::lists('no_usuario');

		return View::make('site.layouts.base')->with('consultores',$consultores);
	}

}