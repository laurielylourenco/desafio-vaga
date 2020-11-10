@extends('layouts.app')

@section('content')

<div class="container mt-3">
<h1>Detalhes do planeta {{$planets["name"]}}</h1>

    <hr>
    <div class="row ">
        <div class="card" style="width: 20rem;">
            <form action="{{route('salvar.planetas')}}" method="POST">
                @csrf
                <div class="card-body">
                    <h5 class="card-title">Nome do Planeta:{{$planets["name"]}}</h5>
                        <input type="hidden" name="name" value="{{$planets['name']}}">

                    <p  class="mb-1">Rotação:{{$planets["rotation_period"]}}horas</p>
                        <input type="hidden" name="rotation_period" value="{{$planets['rotation_period']}}">
                    
                    <p  class="mb-1">Translação:{{$planets["orbital_period"]}} dias ano</p>
                    <input type="hidden" name="orbital_period" value="{{$planets['orbital_period']}}">

                    <p class="mb-1">Diametro: {{$planets["diameter"]}}</p>
                    <input type="hidden" name="diameter" value="{{$planets['diameter']}}">

                    <p class="mb-1">Clima: {{$planets["climate"]}}</p>
                    <input type="hidden"  name="climate" value="{{$planets['climate']}}">

                    <p  class="mb-1">Gravidade:{{$planets["gravity"]}}  </p>
                    <input type="hidden" name="gravity" value="{{$planets['gravity']}}">

                    <p  class="mb-1">Territorio: {{$planets["terrain"]}}</p>
                    <input type="hidden" name="terrain"value="{{$planets['terrain']}}">

                    <p   class="mb-1">Porcentagem de agua no planeta: {{$planets["surface_water"]}}%</p>
                    <input type="hidden" name="surface_water" value="{{$planets['surface_water']}}">

                    <p  class="mb-1">Populaçao:  {{$planets["population"]}}</p> 
                    <input type="hidden" name="population" value="{{$planets['population']}}">
                </div>
                <div class="card-header">
                    <button type="submit" class="btn  btn-outline-success btn-lg btn-block" >Salvar</button>
                </div>
            </form>   
        </div>
    </div>
</div>
@endsection