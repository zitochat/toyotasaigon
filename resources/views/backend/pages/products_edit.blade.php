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
<link rel="stylesheet" href="http://toyotasaigon.com/cssmain/style.css" />
@if($action=='edit')







<div class="tag-hong" id="gioithieuchung">
        <div class="container">
          <ul class="clearfix" id="chode">
            <li class=""><a href="/cpanel_admin/products/outbuilding/{{ $product->slug }}">Outbuilding</a></li>
            <li class=""><a href="/cpanel_admin/products/furniture/{{ $product->slug }}">Furniture</a></li>
            <li class=""><a href="/cpanel_admin/products/safe/{{ $product->slug }}">Safe</a></li>
            <li class=""><a href="/cpanel_admin/products/accessories/{{ $product->slug }}">Accessories</a></li>
            <li class="lsttag"><a href="/cpanel_admin/products/operate/{{ $product->slug }}">Operate</a></li>
            <li class=""><a href="/cpanel_admin/products/specifications/{{ $product->slug }}">Specifications</a></li>
            <li><a href="/cpanel_admin/products/color/{{ $product->slug }}">Color</a></li>
            <li><a href="/cpanel_admin/products/price/{{ $product->slug }}">Price</a></li>
          </ul>   
          
        </div>
        
      </div>
@endif
<div style="padding: 10px">
        <form action='/cpanel_admin/products/post' method="post">
            {{ csrf_field() }}
            <input type="hidden" name="action" value="{{ $action }}"/>
            @if($product->id)
            <input type="hidden" name="product_id" value="{{ $id }}"/>
            @endif
            <b>Name</b><br/>
            <input id="name" type="text" name="name" value="{{ $product->name }}"/><br/>
            <b>Slug</b>(<span style="color:blue;cursor:pointer" onclick="$('#slug').val(slug($('#name').val()))">Conv</span>)<br/>
            <input id="slug" type="text" name="slug" value="{{ $product->slug }}"/><br/>
            
            <b>Thumb</b><br/>
            <div class="x_content">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumb" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input id="thumb" value="{{ $product->thumb }}" class="form-control" type="text" name="thumb">
                    </div>
                        <img id="holder" src="{{ fix_url($product->thumb) }}" class="img-responsive"  style="width: 240px; height: 150px; padding: 2px; border: 1px solid #eee;">
                    </div>
                <br/>

                <b>Image</b><br/>
                <div class="x_content">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm_image" data-input="image" data-preview="holder_image" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="image" value="{{ $product->image }}" class="form-control" type="text" name="image">
                        </div>
                            <img id="holder_image" src="{{ fix_url($product->image) }}" class="img-responsive"  style="width: 240px; height: 150px; padding: 2px; border: 1px solid #eee;">
                        </div>
                    <br/>
            
            <b>Price</b><br/>
            <input type="text" name="price" value="{{ $product->price }}"/><br/>
            
            <b>Parent</b><br/>
            <select name="parent">
                @foreach($vehicles as $vehicle)
                <option @if($vehicle->slug== $product->parent) selected @endif value="{{ $vehicle->slug }}">{{ $vehicle->name }}</option>
                @endforeach
            </select>
            <br/>
            <br/>
            
            <b>Description</b><br/>
            <textarea id="content" name="description">{{ $product->description }}</textarea>
            <br/>
            <input type="submit" value="Save"/>
            </form>
</div>
@stop