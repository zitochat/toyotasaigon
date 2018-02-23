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

$names= array(
    'ĐỘNG CƠ & KHUNG XE',
    'NGOẠI THẤT',
    'NỘI THẤT',
    'TIỆN NGHI',
    'AN TOÀN CHỦ ĐỘNG',
    'AN TOÀN BỊ ĐỘNG'
);
@endphp

@section('content')
<div style="padding: 10px">
    <form action='/cpanel_admin/products/specifications/{{ $slug }}/post' method="post">
            {{ csrf_field() }}
            <input type="hidden" name="action" value="{{ $action }}"/>
            @if($row->id)
            <input type="hidden" name="item_id" value="{{ $id }}"/>
            @endif
            <b>Name</b><br/>
            <select name="name">
                @foreach($names as $name)
                <option value="{{ $name }}" @if($name== $row->name) selected @endif>{{ $name }}</option>
                @endforeach
            </select>
            <br/>
            <br/>
    

            <b>Content:</b><br/>
            <textarea name="content" style="height: 300px">{{ $row->content }}</textarea>

            
            <br/>
            <input type="submit" value="Save"/>
            </form>
</div>
@stop