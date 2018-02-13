@extends('backend.layouts.master')

@section('content')
<table id="show_data" class="display nowrap" cellspacing="0" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
@foreach($contacts as $row)
<tr>
    <td style="width: 10px">{{ $row->id }}</td>
    <td style="width: 150px">{{ $row->name }}</td>
    <td style="width: 180px">{{ $row->email }}</td>
    <td style="width: 300px">{{ $row->address }}</td>
    <td>{{ $row->content }}</td>
    <td><a class="btn-sm btn-danger" href="/cpanel_admin/contact/del/{{ $row->id }}">[x]</a></td>
</tr>
@endforeach
        </tbody>
<table>
@stop