@extends('layouts.app')

@section('content')

<div class="container mt-3">
<h1>Detalhes da nave {{$naves["name"]}}</h1>
    <hr>
    <div class="row ">
        <div class="card" style="width: 20rem;">
            <form action="{{ route('salvar.naves')}}" method="POST">
                @csrf
                <div class="card-body">
                <h5 class="card-title">Nome do Nave:{{$naves["name"]}}</h5>
                        <input type="hidden" name="name" value="{{$naves['name']}}">

                    <p  class="mb-1">Modelo:{{$naves["model"]}}</p>
                        <input type="hidden" name="model" value="{{$naves['model']}}">
                    
                    <p  class="mb-1">Feito por:{{$naves["manufacturer"]}}</p>
                    <input type="hidden" name="manufacturer" value="{{$naves['manufacturer']}}">

                    <p class="mb-1">Numero de passageiros: {{$naves["passengers"]}}</p>
                    <input type="hidden" name="passengers" value="{{$naves['passengers']}}">

                    <p class="mb-1">Tamanho: {{$naves["length"]}}</p>
                    <input type="hidden"  name="length" value="{{$naves['length']}}">

                    <p  class="mb-1">Classe da nave: {{$naves["starship_class"]}}</p>
                    <input type="hidden" name="starship_class" value="{{$naves['starship_class']}}">

                    <p  class="mb-1">Velocidade max na atmosfera: {{$naves["max_atmosphering_speed"]}}</p>
                    <input type="hidden" name="max_atmosphering_speed" value="{{$naves['max_atmosphering_speed']}}">

                    
                </div>
                <div class="card-header">
                    <button type="submit" class="btn  btn-outline-success btn-lg btn-block" >Salvar</button>
                </div>
            </form>   
        </div>
    </div>
</div>
@endsection

