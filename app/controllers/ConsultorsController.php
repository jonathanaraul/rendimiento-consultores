<?php

class ConsultorsController extends BaseController {

	/**
	 * Display a list of the of the consultors.
	 *
	 *
	 * @return Consultors
	 */
	public function getConsultors()
	{

		$consultors = PermissaoSistema::where('in_ativo','=', 'S')
									  ->where('co_sistema', '=', 1)
									  ->whereBetween('co_tipo_usuario', array(0, 2))->get();

		return View::make('site.layouts.base')->with('consultors',$consultors);
	}
	
	//~public function getConsultors()
	//~{
//~
		//~$consultores = Consultor::join('permissao_sistema','permissao_sistema.co_usuario','=','cao_usuario.co_usuario')
									//~->where('permissao_sistema.in_ativo','=', 'S')
									//~->get(['cao_usuario.no_usuario']);
//~
		//~return View::make('site.layouts.base')->with('consultores',$consultores);
	//~}

}
