<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nave extends Model
{
    protected $table = 'naves';
    //fillabou pro dados
    protected $fillable = [
        'name', 'model','manufacturer', 'passengers',
        'length','starship_class', 'max_atmosphering_speed', 'user_id'
    ];


     protected function user(){
        return $this->belongsTo('App\User', 'user_id');
    }  
}
