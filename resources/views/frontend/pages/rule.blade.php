@extends('frontend.layouts.master')

@section('content')
<div class="container main-container clearfix">
    <section id="main">
        <div class="">
            @include('frontend.includes.update', array('title'=> 'Chính sách và điều khoản'))
        </div>
    </section>
</div>
@stop