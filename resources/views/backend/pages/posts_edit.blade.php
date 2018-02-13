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
        <form action='/cpanel_admin/posts/post' method="post">
            {{ csrf_field() }}
            <input type="hidden" name="action" value="{{ $action }}"/>
            @if($post->id)
            <input type="hidden" name="post_id" value="{{ $id }}"/>
            @endif
            <b>Name</b><br/>
            <input id="name" type="text" name="name" value="{{ $post->name }}"/><br/>
            <b>Slug</b>(<span style="color:blue;cursor:pointer" onclick="$('#slug').val(slug($('#name').val()))">Conv</span>)<br/>
            <input id="slug" type="text" name="slug" value="{{ $post->slug }}"/><br/>
            
            <b>Thumb</b><br/>
            <div class="x_content">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumb" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input id="thumb" value="{{ $post->thumb }}" class="form-control" type="text" name="thumb">
                    </div>
                        <img id="holder" src="{{ fix_url($post->thumb) }}" class="img-responsive"  style="width: 240px; height: 150px; padding: 2px; border: 1px solid #eee;">
                    </div>
                <br/>
            
            <b>Status</b><br/>
            <input type="text" name="status" value="{{ $post->status }}"/><br/>
            
            <b>Parent</b><br/>
            <input type="text" name="parent" value="{{ $post->parent }}"/><br/>
            
            <b>Content</b><br/>
            <textarea id="content" name="content">{{ $post->content }}</textarea>
            <br/>
            <input type="submit" value="Save"/>
            </form>
</div>
@stop