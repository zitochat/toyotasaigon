@extends('frontend.layouts.master')

@section('content')
<div class="container main-container clearfix">
    <section id="main">
        <div class="">
            @include('frontend.includes.update', array('title'=> 'Tuyển dụng'))
        </div>
    </section>
</div>
@stop