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
<div style="padding: 10px">
        <form action='/cpanel_admin/sliders/post' method="post">
            {{ csrf_field() }}
            <input type="hidden" name="action" value="{{ $action }}"/>
            @if($slider->id)
            <input type="hidden" name="slider_id" value="{{ $id }}"/>
            @endif
            <b>Url</b><br/>
            <input id="url" type="text" name="url" value="{{ $slider->url }}"/><br/>
            
            <b>Thumb</b><br/>
            <div class="x_content">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumb" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input id="thumb" value="{{ $slider->thumb }}" class="form-control" type="text" name="thumb">
                    </div>
                        <img id="holder" src="{{ fix_url($slider->thumb) }}" class="img-responsive"  style="width: 240px; height: 150px; padding: 2px; border: 1px solid #eee;">
                    </div>
                <br/>
            <input type="submit" value="Save"/>
            </form>
</div>
@stop