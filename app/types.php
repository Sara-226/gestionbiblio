<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class types extends Model
{
    public function livres()
    {
        return $this->hasMany('App\livres');
    }
}
