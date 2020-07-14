<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model{

	protected $guarded = []; // Desabilita la restriccion del fillable.
	// protected $fillable = ['title', 'url', 'description'];

		/**
			Sobre escritura del metodo para que busque por este campo especifico.
		*/
     public function getRouteKeyName()
    {
        return 'url';
    }
}
