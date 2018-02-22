@extends('frontend.layouts.master')
@section('content')
@include('frontend.home.slide_show')
<div style="max-width: 100%">
@include('frontend.home.slick-slider')
</div>
@include('frontend.home.test-driver')
@include('frontend.home.muatragop')
@include('frontend.home.dangkylaithu')
@include('frontend.home.distribution')
@stop