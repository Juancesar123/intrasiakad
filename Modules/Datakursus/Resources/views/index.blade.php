@extends('datakursus::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('datakursus.name') !!}
    </p>
    <form action="/datakursus/1" method="post" accept-charset="utf-8">
    	@csrf
    	@method('put')
    	<input type="text" name="namakursus">
    	{{-- <input type="number" name="id"> --}}
    	<button type="submit">sub</button>
    </form>
@stop
