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
<table id="show_data" class="display nowrap" cellspacing="0" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Thumb</th>
                <th>Price</th>
                <th>Parent</th>
                <th>Description</th>
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
    <td>{{ $row->description }}</td>
</tr>
@endforeach
        </tbody>
<table>
@stop