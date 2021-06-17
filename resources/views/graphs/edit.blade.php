@extends('layouts.app')

@section('content')
       <h1>Edit Graph</h1>

       {!! Form::open(['action' => ['App\Http\Controllers\GraphController@update', $graph->id], 'method'=> 'POST']) !!}
        <div class="form-group">
        {{Form::label('name','Name')}}
        {{form::text('name', $graph->name,['class'=> 'form-control', 'placeholder' =>'Graph Name'])}}
        </div>
        <div class="form-group">
        {{Form::label('description','Description')}}
        {{form::textarea('description', $graph->description,['class'=> 'form-control', 'placeholder' =>'Description'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit',['class'=> 'btn btn-primary' ])}}
        {!! Form::close() !!}
@endsection

<script src="{{ mix('js/app.js') }}"></script>
