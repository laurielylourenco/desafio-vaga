<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Nave;
use App\User;


class NaveController extends Controller
{
    public function __construct() {

        $this->client = new Client([
            'base_uri' => 'https://swapi.dev/api/'
        ]);
    }


    public function listar(Request $request, $page = 1)
    { 
        try{
            $response = $this->client->request('GET', 'starships/?page='.$page);
            $datas = json_decode($response->getBody()->getContents(), true);
            $naves = $datas["results"];
            $nexts = $page + 1;
            $previous = $page - 1;

            return view('admin.nave.index', compact('nexts',  'naves', 'previous')); 

        }catch (\Exception $e){
            abort(404);
        }
        
    }

    public function detalhesNave(Request $naves){

       return view('admin.nave.detalhes', compact('naves'));
    }

    public function salvarNave(Request $req){

       try {
            $user = auth()->user();
            $nave = new Nave;
            $nave->name = $req->name;
            $nave->model = $req->model;
            $nave->manufacturer = $req->manufacturer;
            $nave->passengers = $req->passengers;
            $nave->length = $req->length;
            $nave->starship_class = $req->starship_class;
            $nave->max_atmosphering_speed = $req->max_atmosphering_speed; 
            $nave->user_id = $user->id;

            if ($nave->passengers == 'unknown'){$nave->passengers  = null;}
            if ($nave->length == 'unknown'){$nave->length = null;}
            if ($nave->max_atmosphering_speed == 'unknown' || $nave->max_atmosphering_speed == 'n/a'){$nave->max_atmosphering_speed = null;}
            
            $nave->save(); 
            return redirect('/home/naves/lista'); 

       } catch (\Throwable $th) {
            abort(500);

       }
     }

   
}
