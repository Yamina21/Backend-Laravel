@extends('layouts.app')

@section('content')
       <h1>All Relations with Nodes</h1>
             @if(count($nodes_parent)>0)
             <div class="card">
                 <ul class="list-group list-group-flush">
                  @foreach($nodes_parent as $nodep)


                                    <li class="list-group-item">
                                      <h3>Node {{$nodep->parent_node}} is the parent node to node {{$nodep->child_node}}</h3>



                                    <hr>


                                    <a href="/api/relations/{{$nodep->id}}/edit" class="btn btn-primary">Edit Relation</a>
                                  </li>


                   @endforeach
                 </ul>


             </div>
              @else

            {{ __('No graphs created.') }}
              @endif
@endsection
<script src="{{ mix('js/app.js') }}"></script>
