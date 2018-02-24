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
<a href="/cpanel_admin/products/edit/{{ $id_product }}" style="margin-left: 5px;" class="btn btn-primary">Back to Product</a><br/>
<div style="padding: 10px">
    <form action='/cpanel_admin/products/{{ $item }}/{{ $slug }}/post' method="post">
            {{ csrf_field() }}
            <input type="hidden" name="action" value="{{ $action }}"/>
            @if($row->id)
            <input type="hidden" name="item_id" value="{{ $id }}"/>
            @endif
            <b>Name</b><br/>
            <input id="name" type="text" name="name" value="{{ $row->name }}"/><br/>

                <b>Image</b><br/>
                <div class="x_content">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm_image" data-input="image" data-preview="holder_image" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="image" value="{{ $row->image }}" class="form-control" type="text" name="image">
                        </div>
                            <img id="holder_image" src="{{ fix_url($row->image) }}" class="img-responsive"  style="width: 240px; height: 150px; padding: 2px; border: 1px solid #eee;">
                        </div>
                    <br/>

            <b>Type</b><br/>
            <select name="type">
                <option value="thumb" @if($row->type== 'thumb') selected @endif >Thumb</option>
                <option value="slider" @if($row->type== 'slider') selected @endif >Slider</option>
            </select>
            <br/>
            <br/>

            <b>Description</b><br/>
            <textarea id="content" name="description">{{ $row->description }}</textarea>
            <br/>
            <input type="submit" value="Save"/>
            </form>
</div>
@stop