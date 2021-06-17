@extends('layouts.app')

@section('content')
      <a href="/api/graphs" class="btn btn-default"> Go Back</a>
       <h1>{{$graph->name}}</h1>
       <p>{{$graph->description}}</p>
       <hr>
       <small>Written on {{$graph->created_at}}</small>
<hr>
{!! Form::open(['action' => ['App\Http\Controllers\GraphController@destroy', $graph->id], 'method'=> 'POST', 'class'=> 'pull-right, ']) !!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete       ',['class'=>'btn btn-danger'])}}
{!! Form::close() !!}

<a href="/api/graphs/{{$graph->id}}/edit" class="btn btn-primary">Edit Graph</a>




@endsection

<script src="{{ mix('js/app.js') }}"></script>
