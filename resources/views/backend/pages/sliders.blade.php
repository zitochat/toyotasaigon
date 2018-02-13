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
<a href="/cpanel_admin/sliders/add" style="margin-left: 5px;" class="btn btn-primary">Add new</a><br/>

<table id="show_data" class="display nowrap" cellspacing="0" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Url</th>
                <th>Thumb</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
@foreach($sliders as $row)
<tr>
    <td>{{ $row->id }}</td>
    <td><a href="{{ $row->url }}" target="_blank">{{ $row->url }}</a></td>
    <td><img src="{{ fix_url($row->thumb) }}" style="width: 100px; height: 50px"/></td>
    <td>
        <a class="btn-sm btn-danger" href="/cpanel_admin/sliders/del/{{ $row->id }}">[x]</a>
        <a class="btn-sm btn-success" href="/cpanel_admin/sliders/edit/{{ $row->id }}">[E]</a>
    </td>
</tr>
@endforeach
        </tbody>
<table>
@stop