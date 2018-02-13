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
<a href="/cpanel_admin/posts/add" style="margin-left: 5px;" class="btn btn-primary">Add new</a><br/>
<table id="show_data" class="display nowrap" cellspacing="0" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Thumb</th>
                <th>Parent</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
@foreach($posts as $row)
<tr>
    <td style="width: 10px">{{ $row->id }}</td>
    <td style="width: 150px"><a href="{{ route('categories_details', ['category'=> $cat->where('slug', $row->parent)->first()->parent_slug,'slug'=> $row->slug, 'id'=> $row->id]) }}">{{ $row->name }}</a></td>
    <td style="width: 180px"><img src="{{ fix_url($row->thumb) }}" style="width: 100px; height: 50px"/></td>
    <td>{{ $row->parent }}</td>
    <td>
        <a class="btn-sm btn-danger" href="/cpanel_admin/posts/del/{{ $row->id }}">[x]</a>
        <a class="btn-sm btn-success" href="/cpanel_admin/posts/edit/{{ $row->id }}">[E]</a>
    </td>
</tr>
@endforeach
        </tbody>
<table>
@stop