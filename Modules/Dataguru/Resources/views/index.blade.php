@extends('dataguru::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('dataguru.name') !!}
    </p>
    <div class="">
      {{ Form::open(['route'=>'dataGuruCreate','method'=>'POST']) }}
      {{ Form::submit('Save',['class'=>'btn btn-success pull-right']) }}
	    {{ Form::close() }}
    </div>
@stop
