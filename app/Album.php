<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
        protected $fillable = array('name','description','cover_imag');

    public function photos()
    {
        
        return $this->hasMany('App\album');

    }
}
