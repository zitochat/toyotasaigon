@extends('backend.layouts.master')

@section('content')
<table id="show_data" class="display nowrap" cellspacing="0" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
@foreach($users as $row)
<tr>
    <td>{{ $row->id }}</td>
    <td>{{ $row->name }}</td>
    <td>{{ $row->username }}</td>
    <td>{{ $row->email }}</td>
    <td><a class="btn-sm btn-danger" href="/cpanel/users/del/{{ $row->id }}">[x]</a></td>
</tr>
@endforeach
        </tbody>
<table>
@stop