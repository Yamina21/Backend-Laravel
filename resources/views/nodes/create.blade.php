@extends('layouts.app')

@section('content')
       <h1>create Node</h1>

       {!! Form::open(['action' => 'App\Http\Controllers\NodeController@store', 'method'=> 'POST']) !!}
         <div class="form-group">
        {{Form::label('graph_id','Graph_id')}}
        {{form::text('graph_id','',['class'=> 'form-control', 'placeholder' =>'Graph ID'])}}
        </div>

        {{Form::submit('Submit',['class'=> 'btn btn-primary' ])}}
        {!! Form::close() !!}
@endsection

<script src="{{ mix('js/app.js') }}"></script>
