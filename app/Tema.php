<?php

namespace llibres;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    //

    protected $fillable = ['nom'];

    public function tem() {
    	return $this->hasMany('llibres\Llibre');
    }
}
