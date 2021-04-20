<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pays extends Model
{
    public function livres()
    {
        return $this->hasMany('App\livres');
    }
}
