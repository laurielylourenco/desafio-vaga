@extends('layouts.app')

@section('content')
<div class="container mt-3">
<h1 class="mt-2">Listagem de Planetas</h1>
<hr>
    <div class="row">
    <ul class="pagination">  
        @if($previous == null)
        <li class="page-item disabled"><a value="" class="page-link"  href="#" >Previous</a></li>
        @else
        <li class="page-item"><a value="" class="page-link"  href="{{route('planetas', $previous)}}" >Previous</a></li>
        @endif

        @if($nextPage == null)
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
        @else
        <li class="page-item"><a class="page-link" href="{{route('planetas', $nextPage)}}">Next</a></li>
        @endif
    </ul>
      <table class="table table mt-3">
        <thead>
            <tr>
                <th scope="col">Planetas</th>
      
            </tr>
        </thead>
        <tbody>
        @foreach($planets ?? '' as  $planet)
            <tr> 
                 <th scope="row"> 
                    
                    <a class="nav-link"  href="{{route('detalhe.planetas',$planet)}}"  type="submit">{{$planet["name"]}}</a>
                </th>     
            </tr>
        @endforeach
        </tbody>
      </table> 
    </div>
</div> 

@endsection

