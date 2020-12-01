<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class Planeta extends Model
{
    protected $table = 'planetas';
    //fillabou pro dados
    protected $fillable = [
        'name', 'rotation_period','orbital_period', 
        'diameter','climate','gravity','terrain',
        'surface_water','population','user_id'
    ];
    protected function user(){
        return $this->belongsTo(User::class, 'user_id');
    } 

    

   
}
