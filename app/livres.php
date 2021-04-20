<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livres extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
    public function auteur()
    {
        return $this->belongsTo('App\auteurs');
    }
    public function pay()
    {
        return $this->belongsTo('App\pays');
    }
    public function type()
    {
        return $this->belongsTo('App\types');
    }
}
