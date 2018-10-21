@extends('datakursus::layouts.master')

@section('content')
<table border="1">
<tr>
    <th>No</th>
    <th>Name Kursus</th>
    <th>Created Date</th>

</tr>
@php $no=1 @endphp
@foreach($datakursus as $data)
<tr>
    <td>{{ $no++ }}</td>
    <td>{{ $data->namakursus }}</td>
    <td>{{ $data->created_at }}</td>
</tr>
@endforeach
</table>
@stop
