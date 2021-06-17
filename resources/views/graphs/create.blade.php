@extends('layouts.app')

@section('content')
       <h1>create Graph</h1>

       {!! Form::open(['action' => 'App\Http\Controllers\GraphController@store', 'method'=> 'POST']) !!}
        <div class="form-group">
        {{Form::label('name','Name')}}
        {{form::text('name','',['class'=> 'form-control', 'placeholder' =>'Graph Name'])}}
        </div>
        <div class="form-group">
        {{Form::label('description','Description')}}
        {{form::textarea('description','',['class'=> 'form-control', 'placeholder' =>'Description'])}}
        </div>
        {{Form::submit('Submit',['class'=> 'btn btn-primary' ])}}
        {!! Form::close() !!}
@endsection

<script src="{{ mix('js/app.js') }}"></script>
