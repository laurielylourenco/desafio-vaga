@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">   
                <img class="card-img-top" width="300px" height="300px" src="{{ asset('img/planet.jpg') }}" >
                    <div class="card-header">
                        <h4 class="card-title">Planetas</h4>
                        <p class="card-text">Aqui estao listados os planetas de Star Wars</p>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('planetas') }}" class="card-link">Ver mais</a>
                      
                    </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <img class="card-img-top" width="300px" height="300px"  src="{{ asset('img/nave.jpg') }}" >
                    <div class="card-header">
                        <h4 class="card-title">Naves</h4>
                        <p class="card-text">Aqui estao listados as naves de Star Wars</p>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('lista.naves') }}" class="card-link">Ver mais</a>
                      
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection

