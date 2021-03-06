@extends('frontend.layouts.master')

@section('content')
<div class="container main-container clearfix ">
        <section id="main">
        <h2 class="title-main">Xe mới</h2>
        <div id="pro_demo" class="clearfix">
 
        @foreach($products as $row)
        <div class="car-it">
            <div class="car">
                <a href="{{ route('product_details', ['slug'=> $row->slug, 'id'=> $row->id]) }}" title="{{ $row->name }}"><p class="carname">{{ $row->name }}</p></a>
                <p class="carprice">{{ $row->price }}</p>
                <a href="{{ route('product_details', ['slug'=> $row->slug, 'id'=> $row->id]) }}" title="{{ $row->name }}">
                    <img src="{{ $row->thumb }}" class="{{ $row->name }}" style=" max-width: 100%;"></a>
                <div class="cardesc text-justify">
                {{ str_limit(strip_tags($row->description), 230) }}    
                </div>
                <div class="carbtn">
                <a href="du-toan-chi-phi?slug={{ $row->parent }}" class="cardtcp">Dự toán chi phí</a>
                </div>
            </div>
        </div>
        @endforeach
        </div>
        <div class="clear"></div>                                 
              
        <div class="wrap_paging">
                <div class="paging paging_ajax clearfix">
                    <ul class="pages">
                            {{ $products->links('frontend.pagination.default') }}   
                    <div class="clear"></div></ul></div>
            </div><!--end wrap_paging-->     
    
    
          
            <div class="clear"></div>
            </section>
            </div>
@stop