@extends('frontend.layouts.master')

@section('content')
<style type="text/css">
    .imgxes-main-bg{background:url(upload/hinhanh/23032sl.jpg) no-repeat center 0}
</style>
  <div class="main-container product_detail clearfix">
    <div class="container">
        <div id="breadcrumb">
            <ul class="breadcrumb">
                <li><a style="z-index:10" href="/san-pham.html">Xe mới</a></li>
                <li><a style="z-index:9" href="{{ route('product_details', ['slug'=> $slug, 'id'=> $id]) }}">{{ $parent->name }}</a></li>
            </ul>
        </div>
    </div>
      
    <div class="tag-hong" id="gioithieuchung">
        <div class="container">
              <ul class="clearfix" id="chode">
                @if(count($outbuilding) > 0) <li class=""><a href="#" class="disable-link chuyentab active" data-id="1235">Ngoại thất</a></li>@endif
                @if(count($furniture) > 0)<li class=""><a href="#" class="disable-link chuyentab " data-id="1234">Nội thất</a></li>@endif
                @if(count($operate) > 0)<li class=""><a href="#" class="disable-link chuyentab " data-id="1237">Vận hành</a></li>@endif
                @if(count($safe) > 0)<li class=""><a href="#" class="disable-link chuyentab " data-id="1236">An toàn</a></li>@endif
                @if(count($accessories) > 0)<li class="lsttag"><a href="#" class="disable-link chuyentab " data-id="1259">Phụ kiện chính hãng</a></li>@endif
                @if(count($specifications) > 0)<li class=""><a href="#" class="disable-link chuyentab" data-id="dac">Đặc tính<br> kỹ thuật</a></li>@endif
                @if(count($colors) > 0)<li><a href="#" class="disable-link chuyentab" data-id="mau">Màu xe</a></li>@endif
                <li><a href="#" class="disable-link chuyentab" data-id="cata">Catalog</a></li>
                <li><a href="#" class="disable-link chuyentab" data-id="giaxe">Giá xe</a></li>
                  <li>
                  <a href="/#try_drive" class="btn-laithu" title="Lái thử"><img class="" src="images/laithu.png"></a>
                  <a href="lien-he.html" class="btn-lienhe" title="Liên hệ"><img class="" src="images/lienheicon.png"></a>
                </li>
              </ul>
              
              
        </div>   
    </div>
      
    <div id="dacdiemxe">
        <div class="">
            <div class="dacdiem-info dd-info-1235 active">
                @include('frontend.includes.product_items', ['items'=> $outbuilding])
            </div>
            <div class="dacdiem-info dd-info-1234 ">
                @include('frontend.includes.product_items', ['items'=> $furniture])
            </div>
            <div class="dacdiem-info dd-info-1237 ">
                @include('frontend.includes.product_items', ['items'=> $operate])
            </div>
            <div class="dacdiem-info dd-info-1236 ">
                @include('frontend.includes.product_items', ['items'=> $safe])
            </div>
            <div class="dacdiem-info dd-info-1259 ">
                @include('frontend.includes.phu_kien', ['items'=> $accessories])
            </div>
            <div class="dacdiem-info dd-info-dac">
                @include('frontend.includes.product_specifications')
            </div>
            <div class="dacdiem-info dd-info-mau">
                @include('frontend.includes.product_color')
            </div>
            <div class="dacdiem-info dd-info-cata text-center">
                @include('frontend.includes.product_catalog')
            </div>
            <div class="dacdiem-info dd-info-giaxe">
                @include('frontend.includes.product_price')
            </div>
        </div>
    </div>
     
      
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
           $(window).bind('scroll', function() {
             if ($(window).scrollTop() > 10) {
                 $('.tag-hong').addClass('fixedhong');
             }
             else {
                 $('.tag-hong').removeClass('fixedhong');
             }
          });
           $('.title-thongso a').click(function(){
            var id=$(this).data('id');
            $('.title-thongso a').removeClass('active');
            $(this).addClass('active');
            $('.thongso-detail').removeClass('active');
            $('.thongso-'+id).addClass('active');
          })
          
          $('.box_items_slick').slick({
              dots: false,
              autoplay:true,
              arrows:false,
              infinite: true,
              speed: 300,
              slidesToShow: 1,
              slidesToScroll: 1
            });
            $('.chuyentab ').click(function(){
            var id=$(this).data('id');
            console.log(id);
            $('.chuyentab ').removeClass('active');
            $(this).addClass('active');
            $('.dacdiem-info').removeClass('active');
            $('.dd-info-'+id).addClass('active');
            $('.dd-info-'+id).find(".box_items_slick").slick('reinit');
          })
            $(".list-item .img").click(function(){
              var id = $(this).data("id");
              $.ajax({
                url:"ajax/product_slider.php?_token={{ csrf_token() }}",
                type: "POST",
                data: {id:id},
                success: function(data){
                  $(".imgxes-main.clearfix").html(data);
                }
              })
            })
        });
        </script>
@stop