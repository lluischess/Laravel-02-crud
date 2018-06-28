<?php

namespace llibres;

use Illuminate\Database\Eloquent\Model;

class Llibre extends Model
{
     protected $fillable = ['titol','publicacio','tematica'];

    public function tema() {
    	return $this->belongsTo('llibres\Tema');
    }
}
