@extends('backend.layouts.master')

@section('content')
<table id="show_data" class="display nowrap" cellspacing="0" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Slug</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
@foreach($vehicles as $row)
<tr>
    <td>{{ $row->id }}</td>
    <td>{{ $row->slug }}</td>
    <td>{{ $row->name }}</td>
    <td><a class="btn-sm btn-danger" href="/cpanel/vehicles/del/{{ $row->id }}">[x]</a></td>
@endforeach
        </tbody>
<table>
@stop