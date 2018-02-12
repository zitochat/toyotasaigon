@extends('backend.layouts.master')

@php
$provinces= DB::table('province')->get();
@endphp

@section('content')
<table id="show_data" class="display nowrap" cellspacing="0" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Vehicles</th>
                <th>Month</th>
                <th>Province</th>
                <th>Phone</th>
                <th>Branch</th>
                <th>Km</th>
                <th>Require</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
@foreach($schedule as $row)
<tr>
    <td>{{ $row->id }}</td>
    <td>{{ $row->name_datlich }}</td>
    <td>{{ $row->vehicles_datlich }}</td>
    <td>{{ $row->months_datlich }}</td>
    <td>{{ $provinces->where('provinceid', $row->id_tinhdatlich)->first()->name }}</td>
    <td>{{ $row->phone_datlich }}</td>
    <td>{{ $row->cn_datlich }}</td>
    <td>{{ $row->km_datlich }}</td>
    <td>{{ $row->require_baoduong }}</td>
    <td><a class="btn-sm btn-danger" href="/cpanel/schedule/del/{{ $row->id }}">[x]</a></td>
</tr>
@endforeach
        </tbody>
<table>
@stop