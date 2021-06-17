@extends('layouts.app')

@section('content')
      <a href="/api/nodes" class="btn btn-default"> Go Back</a>
       <h1>Node ID Number :{{$node->id}}</h1>
        <hr>
 <hr>
{!! Form::open(['action' => ['App\Http\Controllers\GraphController@destroy', $node->id], 'method'=> 'POST', 'class'=> 'pull-right, ']) !!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete       ',['class'=>'btn btn-danger'])}}
{!! Form::close() !!}

<a href="/api/nodes/{{$node->id}}/edit" class="btn btn-primary">Edit Node</a>




@endsection

<script src="{{ mix('js/app.js') }}"></script>
