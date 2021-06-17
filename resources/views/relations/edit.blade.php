@extends('layouts.app')

@section('content')
       <h1>Edit Relations</h1>

       {!! Form::open(['action' => ['App\Http\Controllers\RelationController@update', $relation->id], 'method'=> 'POST']) !!}
        <div class="form-group">
        {{Form::label('parent_node','parent_node')}}
        {{form::text('parent_node', $relation->parent_node,['class'=> 'form-control', 'placeholder' =>'parent node name'])}}
        </div>
        <div class="form-group">
        {{Form::label('child_node','child_node')}}
        {{form::textarea('child_node', $relation->child_node,['class'=> 'form-control', 'placeholder' =>'child node name'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit',['class'=> 'btn btn-primary' ])}}
        {!! Form::close() !!}
@endsection

<script src="{{ mix('js/app.js') }}"></script>
