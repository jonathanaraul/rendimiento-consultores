<?php

class PermissaoSistema extends \Eloquent {
	
	
	
	protected $table = 'permissao_sistema';
	public $timestamp = false;
	protected $fillable = array('co_usuario','in_ativo','co_sistema','co_tipo_usuario');
	protected $primaryKey = 'co_sistema';
	
	
	public function Consultors() {
        return $this->belongsTo('Consultor', 'co_usuario');
    }
}
