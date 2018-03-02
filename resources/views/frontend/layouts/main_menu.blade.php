@php
$service_list= \DB::table('posts')->where('parent', 'dich-vu')->get();
$products= \DB::table('products')->where('show', '1')->orderBy('slug')->get();
@endphp

<div id="main_menu" >
    <div id="main_mn_container" class="clearfix container">
      <div id='mn_top' class="clearfix">
<a href="index.html" class="first-logo"><img src="upload/hinhanh/041_vi.png" alt="Công ty Cổ phần Toyota Đông Sài Gòn " /></a>
<ul class="clearfix">

<li class="{{ (Request::is('/') ? 'active' : '') }} trangchu"><a href='index.html'>
<span>Trang chủ</span></a>
</li>
<li class="{{ (Request::is('/gioi-thieu.html') ? 'active' : '') }} has-sub longcat"><a href='gioi-thieu.html' ><span>Giới thiệu</span></a>
  <ul>
    <li><a href="/ve-chung-toi"><i class="fa fa-angle-right" aria-hidden="true"></i> Về Toyota Việt Nam</a></li>
    <li><a href="/gioi-thieu/ve-toyota-dong-sai-gon-10.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Về chúng tôi</a></li>
  </ul>
</li>
<li class="{{ (Request::is('/san-pham.html') ? 'active' : '') }} has-sub"><a href='san-pham.html' ><span>Xe mới</span></a>

<div class="xe-box-main clearfix" style="background-image: url(/images/TT16s.jpg);">
<div class="xe-box-wrap clearfix">
  
  @include('frontend.includes.menu', ['productx'=> $products])



</div>
</div>
</li>
<li class=" has-sub longcat"><a href='dich-vu.html' ><span>Dịch vụ</span></a>
<ul>
@foreach($service_list as $row)
<li><a href="dich-vu/{{ $row->slug }}-{{ $row->id }}.html"><i class="fa fa-angle-right" aria-hidden="true"></i> {{ $row->name }}</a></li>
@endforeach
</ul>     </li>




<li class=" longcat has-sub"><a href='tin-tuc.html'>
<span>Tin tức</span></a>
<ul>
<li><a href="tin-tuc/hoat-dong-tesc"><i class="fa fa-angle-right" aria-hidden="true"></i> Hoạt động TESC</a></li>
<li><a href="tin-tuc/thi-truong-oto"><i class="fa fa-angle-right" aria-hidden="true"></i> Thị trường Ôtô</a></li>

</ul>
</li>
<li>
  <a href="dich-vu-tai-chinh"><span>Dịch vụ tài chính</span></a>
</li>
<li class=" last"><a href='/lien-he.html'>
<span>Liên hệ</span></a>
</li>



</ul>
<a href="index.html" class="second-logo"><img src="upload/hinhanh/4352_vi.png" alt="Công ty Cổ phần Toyota Đông Sài Gòn " /></a>
</div>

<style type="text/css">
.show-xeinfo{ z-index: 2;height:auto;width:100%}
.hide-xeinfo{}
</style>

<script type="text/javascript">
$(document).ready(function() {
$(window).bind('scroll', function() {
if ($(window).scrollTop() > 40) {
$('#main_menu').addClass('fixedmenu');
}
else {
$('#main_menu').removeClass('fixedmenu');
}
});
$('.xe-slide-main').slick({
dots: false,
autoplay:true,
arrows:false,
infinite: true,
speed: 300,
slidesToShow: 1,
slidesToScroll: 1
});
var $t;
$(".items").hover(function(){
$(".xe-content-main").removeClass("show-xeinfo");
$(".xe-content-main").css({"visibility":"hidden","opacity":0});
clearTimeout($t);
// $(this).find(".xe-content-main").addClass("show-xeinfo");	 
// $(this).find(".xe-slide-main").slick('reinit');
$obj = $(this);
$t = setTimeout(function(){
$obj.find(".xe-content-main").css({"visibility":"visible","opacity":1});
$obj.find(".xe-content-main").addClass("show-xeinfo");	



$obj.find(".xe-slide-main").slick('reinit');


}, 500);
// timer = 
}, function(){
$obj.find(".xe-content-main").removeClass("show-xeinfo");
$obj.find(".xe-content-main").css({"visibility":"hidden","opacity":0});
})
});
</script>              </div>
    <!--end #main_mn_container-->
  </div>