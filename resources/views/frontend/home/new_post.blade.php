@php
$posts= DB::table('posts')->orderBy('id')->get()->take(10);
@endphp

<p class="title-main">&nbsp;&nbsp;&nbsp;Bài viết mới</p>
<div class="container-fluid">
<div id="new_post" class="row">
@foreach($posts as $row)
<div class="col-md-6 col-xs-12" style="min-height: 115px">
    <a href="/tin-tuc/{{ $row->slug }}-{{ $row->id }}.html">
  <div class="row" style="padding-bottom: 10px; border-bottom: 1px solid #A5A5A5;">
    <div class="col-md-3 hidden-xs">
        <img src="{{ $row->thumb }}" alt="{{ $row->name }}" class="image_new" style="width: 108px; height: 120px; border: 1px solid #eee; margin-top: 5px; box-shadow: 1px 1px 7px #23222259;"/>
    </div>
    <div class="col-md-9 col-xs-12">
        <h3 style="color: #000">{{ $row->name }}</h3>
        <p style="color: #888">{{ str_limit(strip_tags( $row->content ), 100) }}</p>
      </div>
  </div>
    </a>
</div>
@endforeach
</div>
</div>

<style type="text/css">
.news-box.horizal-news img {
  height: 81px !important;
}
  </style>