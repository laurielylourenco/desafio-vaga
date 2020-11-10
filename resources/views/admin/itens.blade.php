@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row">

        <div class="col-md-6">
          <h4>Planetas</h4>

          @foreach($planetaSalvo ?? '' as  $planets)
          <div class="card border-dark mt-2" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">Nome do Planeta:{{$planets["name"]}}</h5>
                    <p  class="mb-1">Rotação:{{$planets["rotation_period"]}}horas</p>                           
                    <p  class="mb-1">Translação:{{$planets["orbital_period"]}} dias ano</p>
                    <p class="mb-1">Diametro: {{$planets["diameter"]}}</p>
                    <p class="mb-1">Clima: {{$planets["climate"]}}</p>
                    <p  class="mb-1">Gravidade:{{$planets["gravity"]}}  </p>
                    <p  class="mb-1">Territorio: {{$planets["terrain"]}}</p>
                    <p   class="mb-1">Porcentagem de agua no planeta: {{$planets["surface_water"]}}%</p>
                    <p  class="mb-1">Populaçao:  {{$planets["population"]}}</p> 
                </div>
        </div>
        @endforeach
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        </div>
        <div class="col-md-6">
            <h4>Naves</h4> 

            @foreach($naveSalva ?? '' as  $naves)
            <div class="card border-dark mt-2" style="width: 20rem;">  
                <div class="card-body">
                    <h5 class="card-title">Nome do Nave:{{$naves["name"]}}</h5>
                        <p class="mb-1">Modelo:{{$naves["model"]}}</p>  
                        <p class="mb-1">Feito por:{{$naves["manufacturer"]}}</p>
                        <p class="mb-1">Numero de passageiros: {{$naves["passengers"]}}</p>
                        <p class="mb-1">Tamanho: {{$naves["length"]}}</p>
                        <p class="mb-1">Classe da nave: {{$naves["starship_class"]}}</p>
                        <p class="mb-1">Velocidade max na atmosfera: {{$naves["max_atmosphering_speed"]}}</p>     
                </div> 
            </div>   
            @endforeach   
        </div>
        
    </div>
</div>
@endsection