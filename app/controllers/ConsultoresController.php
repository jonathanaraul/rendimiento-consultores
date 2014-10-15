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

		$consultores = Consultor::join('permissao_sistema','permissao_sistema.co_usuario','=','cao_usuario.co_usuario')
									->where('permissao_sistema.in_ativo','=', 'S')
									->get(['cao_usuario.no_usuario']);

		return View::make('site.layouts.base')->with('consultores',$consultores);
	}

}