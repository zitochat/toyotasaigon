@extends('backend.layouts.master')

@php
$cat= DB::table('categories')->get();

function fix_url($str)
{
if(!empty($str)) {
    if(strpos($str, 'http')!== false) {
        return $str;
    } else {
        return URL::to('/') . '/' . $str;
    }
} else {
return '/upload/news/dich-vu-cho-thue-xe-toyota-dong-sai-gon13001.jpg';
}
}
@endphp

@section('content')
<a href="/cpanel_admin/products/add" style="margin-left: 5px;" class="btn btn-primary">Add new</a><br/>

<table id="show_data" class="display nowrap" cellspacing="0" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Thumb</th>
                <th>Price</th>
                <th>Parent</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
@foreach($products as $row)
<tr>
    <td>{{ $row->id }}</td>
    <td style="width: 200px">{{ $row->name }}</td>
    <td><img src="{{ fix_url($row->thumb) }}" style="width: 100px; height: 50px"/></td>
    <td>{{ $row->price }}</td>
    <td>{{ $row->parent }}</td>
    <td style="width: 90px">{{ str_limit($row->description, 50, '..') }}</td>
    <td>
        <a class="btn-sm btn-danger" href="/cpanel_admin/products/del/{{ $row->id }}">[x]</a>
        <a class="btn-sm btn-success" href="/cpanel_admin/products/edit/{{ $row->id }}">[E]</a>
    </td>
</tr>
@endforeach
        </tbody>
<table>
@stop