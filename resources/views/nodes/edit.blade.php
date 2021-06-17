@extends('layouts.app')

@section('content')
       <h1>Edit Graph</h1>

       {!! Form::open(['action' => ['App\Http\Controllers\GraphController@update', $node->id], 'method'=> 'POST']) !!}
        <div class="form-group">
        {{Form::label('graph_id','Graph_id')}}
        {{form::text('Graph_id', $node->Graph_id,['class'=> 'form-control', 'placeholder' =>'Graph ID'])}}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit',['class'=> 'btn btn-primary' ])}}
        {!! Form::close() !!}
@endsection

<script src="{{ mix('js/app.js') }}"></script>
