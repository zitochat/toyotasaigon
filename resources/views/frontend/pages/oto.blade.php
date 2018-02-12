@extends('frontend.layouts.master')


@section('content')
<div class="container main-container clearfix">
        <section id="main">
            <div class="">
           <p class="title-main">Thị trường Ôto</p>
            <div class="content-container news-content">
                    
                @foreach($oto_list as $row)
                <div class=" news-box horizal-news clearfix" data-wow-delay=".5s">
                        <a href="/tin-tuc/{{ $row->slug }}-{{ $row->id }}.html">
                          
                          <div class="clearfix">
                          <div class="news-img"><img src="{{ $row->thumb }}" alt="{{ $row->name }}" onerror="this.src='images/no-image-available.png';"><span class="zoom-icon"></span></div>
                          
                          <h3>{{ $row->name }}</h3>
                          <p>{{ strip_tags($row->content) }}</p>
                          <span class="xemtatca">Xem thêm</span>
                          </div>
                        </a>
                      </div>
                @endforeach
                    
 
                    <div class="clear"></div>                                 
                    
           <div class="wrap_paging">
                    <div class="paging paging_ajax clearfix">
                        <ul class="pages">
                                {{ $oto_list->links('frontend.pagination.default') }}   
                        <div class="clear"></div></ul></div>
                </div><!--end wrap_paging-->     
        
                <div class="clear"></div>
            </div> 
                </div>
        </section>
            </div>
@stop