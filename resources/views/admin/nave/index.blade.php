@extends('layouts.app')

@section('content')

<div class="container mt-3">
<h1 class="mt-2">Listagem de Naves</h1>
<hr>
<ul class="pagination">
    @if($previous == null)
        <li class="page-item disabled"><a value class="page-link" href="#" >Previous</a></li>
    @else
        <li class="page-item"><a value class="page-link" href="{{route('lista.naves', $previous)}}" >Previous</a></li>
    @endif

    @if($nexts == null)
        <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
     @else
        <li class="page-item"><a class="page-link" href="{{route('lista.naves', $nexts)}}">Next</a></li>
    @endif
    </ul>
    <div class="row">

   

      <table class="table table mt-3">
        <thead>
            <tr>
                <th scope="col">Naves</th>
      
            </tr>
        </thead>
        <tbody>
        @foreach($naves ?? '' as  $nave)
            <tr> 
                 <th scope="row"> 
                    
                     <a class="nav-link"  href="{{route('detalhe.naves',$nave)}}" type="submit">{{$nave["name"]}}  
                     </a>  
                  
                </th>     
            </tr>
        @endforeach
        </tbody>
      </table> 
    </div>
</div> 


@endsection