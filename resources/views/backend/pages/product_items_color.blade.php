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
<a href="/cpanel_admin/products/color/{{ $slug }}/add/" style="margin-left: 5px;" class="btn btn-primary">Add new</a><br/>
<table id="show_data" class="display nowrap" cellspacing="0" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Color ID</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
@foreach($datas as $row)
<tr>
    <td style="width: 10px">{{ $row->id }}</td>
    <td style="width: 150px">{{ $row->color_id }}</td>
    <td style="width: 180px"><img src="{{ fix_url($row->image) }}" style="width: 100px; height: 50px"/></td>
    <td>
    <a class="btn-sm btn-danger" href="/cpanel_admin/products/color/{{ $slug }}/del/{{ $row->id }}">[x]</a>
        <a class="btn-sm btn-success" href="/cpanel_admin/products/color/{{ $slug }}/edit/{{ $row->id }}">[E]</a>
    </td>
</tr>
@endforeach
        </tbody>
<table>
@stop