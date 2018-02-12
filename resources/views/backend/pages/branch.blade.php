@extends('backend.layouts.master')

@section('content')
<table id="show_data" class="display nowrap" cellspacing="0" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Slug</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
@foreach($branch as $row)
<tr>
    <td>{{ $row->id }}</td>
    <td>{{ $row->slug }}</td>
    <td>{{ $row->name }}</td>
</tr>
@endforeach
        </tbody>
<table>
@stop