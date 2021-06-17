@extends('layouts.app')

@section('content')
       <h1>All Graphs</h1>
             @if(count($Graphs)>0)
             <div class="card">
                 <ul class="list-group list-group-flush">
                  @foreach($Graphs as $graph)


                                    <li class="list-group-item">
                                      <h3><a href="/api/graphs/{{$graph->id}}">{{$graph->name}}</a></h3>
                                      <small>Created on {{$graph->created_at}}</small>


                                    </li>



                   @endforeach
                 </ul>

             </div>
              @else

            {{ __('No graphs created.') }}
              @endif
@endsection
<script src="{{ mix('js/app.js') }}"></script>
