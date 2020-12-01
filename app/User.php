<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Collection;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     protected function planetas(){
        return $this->hasMany(Planeta::class);
    } 

      protected function naves(){
        return $this->hasMany(Nave::class);
    } 

    protected function planetaSalvo($id){
        $users = User::all();
        $user = $users->find($id);  
        return  $planetas = User::find($id)->planetas;
    }


    protected function naveSalvo($id){
        $users = User::all();
        $user = $users->find($id);  
        return  $naves = User::find($id)->naves;
    }
}
