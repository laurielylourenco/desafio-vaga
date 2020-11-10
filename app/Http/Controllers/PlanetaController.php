<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planeta;
use App\User;
use GuzzleHttp\Client;
use URL;


class PlanetaController extends Controller
{
    public function __construct() {
        $this->client = new Client([
            'base_uri' => 'https://swapi.dev/api/'
        ]);

    }

    //funcao esta listando os nomes dos planetas 
     public function planetas(Request $request, $page = 1){
        try{
            $response = $this->client->request('GET', 'planets/?page='.$page);
            $datas = json_decode($response->getBody()->getContents(), true);
            $planets = $datas["results"];
            $nextPage = $page + 1;
            $previous = $page - 1;      
            return view('admin.planeta.index', compact('planets','nextPage','previous'));

        }catch (\Exception $e){
            echo "deu erro aqui".$e->getMessage();
        }
        
     }  

    //funcao que esta listando os detalhes dos planetas
     public function detalhesPlanetas(Request $planets){        
           
        return view("admin.planeta.detalhes", compact("planets"));
     }

     //funcao que vai salvar os dados no banco 
     public function salvarPlaneta(Request $req){
        try {
            $user = auth()->user();

            $planets = new Planeta;
            $planets->name = $req->name;
            $planets->rotation_period = $req->rotation_period;
            $planets->orbital_period = $req->orbital_period;
            $planets->diameter = $req->diameter;
            $planets->climate = $req->climate;
            $planets->gravity = $req->gravity;
            $planets->terrain = $req->terrain;
            $planets->surface_water = $req->surface_water;
            $planets->population = $req->population;
            $planets->user_id = $user->id;

            if ($planets->surface_water == 'unknown'){$planets->surface_water  = null;}
            if ($planets->rotation_period == 'unknown'){$planets->rotation_period = null;}
            if ($planets->orbital_period == 'unknown'){$planets->orbital_period = null;}
            if ($planets->population == 'unknown'){$planets->population = null;}
            if ($planets->diameter){$planets->diameter = null;}
            
            $planets->save();
            return redirect('/home/planetas');

        } catch (\Throwable $th) {
            //throw $th;
            echo "Erro ao cadastrar".$th->getMessage();
        }
        
     }
}
