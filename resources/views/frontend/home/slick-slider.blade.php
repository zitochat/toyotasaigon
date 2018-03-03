<div class="news-nb-wrap">
    @foreach($news_list as $news)
    <div class="news-nb-it slick-slide slick-current slick-active" tabindex="0" role="option" aria-describedby="slick-slide87" style="width: 458px;" data-slick-index="7" aria-hidden="false">
        <div class="news-nb clearfix">
          <a href="{{ route('categories_details', ['category'=> 'tin-tuc', 'slug'=> $news->slug, 'id'=> $news->id]) }}" tabindex="0">
            <div class="img"><img src="{{ $news->thumb }}" alt="{{ $news->name }}"></div>
            <div class="newsnb-info"><h4>{{ $news->name }}</h4>
            <p class="desc">{{ str_limit(strip_tags($news->content), 120) }}</p>
            <p class="text-right"><span class="xemthem">Xem thêm</span></p>
            </div>
          </a>
        </div>
      </div>
    @endforeach
</div>


