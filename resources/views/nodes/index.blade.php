@extends('layouts.app')

@section('content')
       <h1>All Nodes</h1>
       @if(count($nodes)>0)
       <div class="card">
           <ul class="list-group list-group-flush">
            @foreach($nodes as $node)


                              <li class="list-group-item">
                                <h3><a href="/api/nodes/{{$node->id}}">This is Node {{$node->id}} Belongs to Graph Number {{$node->Graph_id}}</a></h3>
                                <p>This graph has {{count($nodes)}} Node</p>


                              </li>



             @endforeach
           </ul>

       </div>
        @else

      {{ __('No graphs created.') }}
        @endif
@endsection
<script src="{{ mix('js/app.js') }}"></script>
