@extends('frontend.layouts.master')

@section('content')
<div class="container main-container  clearfix">
        <section id="main">
            <div class="">
           <p class="title-main">{{ $post->name }}</p>
           <div id="breadcrumb">
               <ul class="breadcrumb">
                   <li><a style="z-index:10" href="/{{ $category }}.html">{{ $parent->parent_name }}</a></li>
                   <li><a style="z-index:9" href="/{{ $category }}/{{ $post->slug }}-{{ $post->id }}.html">{{ $post->name }}</a></li></ul></div>
           <div class="content-container news-content">
               {!! $post->content !!}
          
            </div> 
                </div>
        </section>
            </div>
@stop