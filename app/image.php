<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	/**
	* Retorna o registro de usuário relacionado a imagem
 	* Seria parecido com o perfil, mas no model Profile.
 	*/
	public function post()
	{
		return $this->belongsTo('App\User');
	}
}