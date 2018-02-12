@extends('backend.layouts.master')

@section('content')
<table id="show_data" class="display nowrap" cellspacing="0" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
@foreach($province as $row)
<tr>
    <td>{{ $row->provinceid }}</td>
    <td>{{ $row->name }}</td>
    <td>{{ $row->type }}</td>
</tr>
@endforeach
        </tbody>
<table>
@stop