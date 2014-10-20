<?php

class Consultor extends Eloquent {
	
	
	protected $table = 'cao_usuario';
	public $timestamp = false;
	protected $fillable = array('co_usuario','no_usuario');
	protected $primaryKey = 'co_usuario';
	
	 public function Permissao() {
        return $this->hasOne('PermissaoSistema', 'co_usuario');
    }
}
