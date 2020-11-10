<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planeta;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

   public function itemSalvo(Request $req){
    //listar os dados que usuario salvou 
    $user = auth()->user();
    $id = $user->id;

    $planetaSalvo = User::planetaSalvo($id);
    $naveSalva = User::naveSalvo($id);

    return view('admin.itens', compact('planetaSalvo', 'naveSalva'));


    


   }
}
