@extends('backend.layouts.master')

@php
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
<a href="/cpanel_admin/products/{{ $item }}/{{ $slug }}/add/" style="margin-left: 5px;" class="btn btn-primary">Add new</a><br/>
<table id="show_data" class="display nowrap" cellspacing="0" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Typy</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
@foreach($datas as $row)
<tr>
    <td style="width: 10px">{{ $row->id }}</td>
    <td style="width: 150px">{{ $row->name }}</td>
    <td style="width: 180px"><img src="{{ fix_url($row->image) }}" style="width: 100px; height: 50px"/></td>
    <td width="60px">{{ str_limit($row->description, 60) }}</td>
    <td>{{ $row->type }}</td>

    <td>
    <a class="btn-sm btn-danger" href="/cpanel_admin/products/{{ $item }}/{{ $slug }}/del/{{ $row->id }}">[x]</a>
        <a class="btn-sm btn-success" href="/cpanel_admin/products/{{ $item }}/{{ $slug }}/edit/{{ $row->id }}">[E]</a>
    </td>
</tr>
@endforeach
        </tbody>
<table>
@stop