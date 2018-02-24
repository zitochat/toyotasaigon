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
<a href="/cpanel_admin/vehicles" style="margin-left: 5px;" class="btn btn-primary">Back to Vehicles</a><br/>
<br/>
<link rel="stylesheet" href="http://toyotasaigon.com/cssmain/style.css" />
@if($action=='edit')







<div class="tag-hong" id="gioithieuchung">
        <div class="container">
          <ul class="clearfix" id="chode">
            <li class=""><a href="/cpanel_admin/products/outbuilding/{{ $vehicle->slug }}">Outbuilding</a></li>
            <li class=""><a href="/cpanel_admin/products/furniture/{{ $vehicle->slug }}">Furniture</a></li>
            <li class=""><a href="/cpanel_admin/products/safe/{{ $vehicle->slug }}">Safe</a></li>
            <li class=""><a href="/cpanel_admin/products/accessories/{{ $vehicle->slug }}">Accessories</a></li>
            <li class="lsttag"><a href="/cpanel_admin/products/operate/{{ $vehicle->slug }}">Operate</a></li>
            <li class=""><a href="/cpanel_admin/products/specifications/{{ $vehicle->slug }}">Specifications</a></li>
            <li><a href="/cpanel_admin/products/color/{{ $vehicle->slug }}">Color</a></li>
            <li><a href="/cpanel_admin/products/price/{{ $vehicle->slug }}">Price</a></li>
          </ul>   
          
        </div>
        
      </div>
@endif

<div style="padding: 10px">
<form action='/cpanel_admin/vehicles/post/{{ $id }}' method="post">
            {{ csrf_field() }}
            <input type="hidden" name="action" value="{{ $action }}"/>
            @if($vehicle->id)
            <input type="hidden" name="slider_id" value="{{ $id }}"/>
            @endif
            <b>Name</b><br/>
            <input id="name" type="text" name="name" value="{{ $vehicle->name }}"/><br/>
            <b>Slug</b>(<span style="color:blue;cursor:pointer" onclick="$('#slug').val(slug($('#name').val()))">Conv</span>)<br/>
            <input id="slug" type="text" name="slug" value="{{ $vehicle->slug }}"/><br/>
                <br/>
            <input type="submit" value="Save"/>
            </form>
</div>
@stop