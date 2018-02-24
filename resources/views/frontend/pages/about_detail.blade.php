@extends('frontend.layouts.master')

@section('content')

<div class="container main-container clearfix">
        <section id="main">
            <div class="">
           <p class="title-main">Giới thiệu về công ty</p>
  
           <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading menus">
                    <h4 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        Tổng quan
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                      @include('frontend.includes.about.1')
                    </div>
                  </div>
                </div>


                <div class="panel panel-default">
                        <div class="panel-heading menus">
                          <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                    Ban lãnh đạo Công ty ô tô Toyota Việt Nam
                            </a>
                          </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                          <div class="panel-body">
                                @include('frontend.includes.about.2')
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                            <div class="panel-heading menus">
                              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                        Lĩnh vực hoạt động chính
                                </a>
                              </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                              <div class="panel-body">
                                    @include('frontend.includes.about.3')
                              </div>
                            </div>
                          </div>


                    
                          <div class="panel panel-default">
                                <div class="panel-heading menus">
                                  <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                            Sản phẩm
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                  <div class="panel-body">
                                        @include('frontend.includes.about.4')
                                  </div>
                                </div>
                              </div>
  

                              <div class="panel panel-default">
                                    <div class="panel-heading menus">
                                      <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                                Lịch sử hình thành và phát triển
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="collapse5" class="panel-collapse collapse">
                                      <div class="panel-body">
                                            @include('frontend.includes.about.5')
                                      </div>
                                    </div>
                                  </div>





                                  <div class="panel panel-default">
                                        <div class="panel-heading menus">
                                          <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                                    Giải thưởng
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapse6" class="panel-collapse collapse">
                                          <div class="panel-body">
                                                @include('frontend.includes.about.6')
                                          </div>
                                        </div>
                                      </div>







              </div>

              <div><p class="block-title">Nội dung khác</p></div>

                </div>
        </section>
            </div>
            <link rel="stylesheet" href="http://idangero.us/swiper/dist/css/swiper.min.css" type="text/css">

<style type="text/css">
.block-title {
    display: inline-block;
    width: 100%;
    height: 45px;
    line-height: 43px;
    background-color: #e7e7e7;
    border-top: 1px solid #b9b9b9;
    border-bottom: 1px solid #b9b9b9;
    color: #000000;
    text-align: center;
    font-size: 18px;
    margin: 20px 0px;
}
.panel-group .panel-heading+.panel-collapse>.list-group, .panel-group .panel-heading+.panel-collapse>.panel-body {
    border: none !important;
}
.panel {
    background-color: transparent !important;
    border: none;
}
.menus {
    font-size: 13px;
    font-weight: normal;
    font-family: Verdana;
    color: #000000;
    background: #e5e5e5;
    cursor: pointer;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    padding: 5px 15px 5px 0px;
    line-height: 18px;
    margin-top: 12px;
    position: relative;
}
.panel-heading .accordion-toggle:after {
    font-family: 'Glyphicons Halflings';
    content: "\e114";
    float: left;
    color: white;
    background-color: #f00;
    font-size: 8px;
    width: 24px;
    height: 27px;
    position: relative;
    border-radius: 4px;
    margin-top: -5px;
    padding: 8px;
    margin-right: 6px;
}
.panel-heading .accordion-toggle.collapsed:after {
    content: "\e080";
}
.accordion-toggle {
    font-size: 12px
}


.swiper-slide {
    width: 152.25px;
    height: 27px;
    float: left;
    line-height: 28px;
    text-align: center;
    border-right: 1px solid #cccccc;
    color: #000000;
    cursor: pointer;
    background-color: #e7e7e7;
    border-top: 1px solid #cccccc;
    border-bottom: 1px solid #cccccc;
    overflow: hidden;
    padding: 0px 29px;
    cursor: pointer;
    top: 0;
    left: 0;
}

.timeline-slideshow .timeline {
    width: 100%;
    height: 29px;
    background-color: #e7e7e7;
    border-top: 1px solid #cccccc;
    border-bottom: 1px solid #cccccc;
    overflow: hidden;
    padding: 0px 29px;
    cursor: pointer;
    position: absolute;
    top: 0;
    left: 0;
}

.prev {
    left: 0;
    background-image: url(http://www.toyotavn.com.vn/assets/css/icons/small-silver-leftarrow.png);
    background-repeat: no-repeat;
    background-size: cover;
    border-right: 1px solid #ccc;
    width: 29px;
    height: 100%;
    position: absolute;
    z-index: 10;
    margin-top: 0px;
}
.next {
    right: 0;
    background-image: url(http://www.toyotavn.com.vn/assets/css/icons/small-silver-rightarrow.png);
    background-repeat: no-repeat;
    background-size: cover;
    width: 29px;
    height: 100%;
    position: absolute;
    z-index: 10;
    margin-top: 0px;
}

.swiper-slide.active {
    background-color: #ffffff;
    color: #e30018;
}

.img-wrapper {
    width: 100%;
    text-align: center;
    padding: 10px;
    background: #fff;
    display: none;
}
img {
  max-width: 99%;
}
</style>



    <script type="text/javascript" src="http://idangero.us/swiper/dist/js/swiper.min.js"></script>

    <script>
            var swiper = new Swiper('.lichsu .swiper-container', {
              slidesPerView: 5,
              spaceBetween: 50,
              navigation: {
                nextEl: '.lichsu .next',
                prevEl: '.lichsu .prev',
            },
            });

            var swiper = new Swiper('.giaithuong .swiper-container', {
              slidesPerView: 5,
              spaceBetween: 50,
              navigation: {
                nextEl: '.giaithuong .next',
                prevEl: '.giaithuong .prev',
            },
            });

    $('.lichsu .swiper-container .swiper-slide').on('click', function(){
        $('.lichsu .swiper-container .swiper-slide').removeClass('active');
        $(this).addClass('active');
        $('.lichsu .viewport .img-wrapper').css('display', 'none');
        $('.lichsu .viewport .year-' + $(this).attr('data-year')).css('display', 'block');
    });

    $('.giaithuong .swiper-container .swiper-slide').on('click', function(){
        $('.giaithuong .swiper-container .swiper-slide').removeClass('active');
        $(this).addClass('active');
        $('.giaithuong .viewport .img-wrapper').css('display', 'none');
        $('.giaithuong .viewport .year-' + $(this).attr('data-year')).css('display', 'block');
    });
          </script>
@stop