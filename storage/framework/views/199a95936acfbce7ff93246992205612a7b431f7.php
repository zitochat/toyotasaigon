<?php
$service_list= \DB::table('posts')->where('parent', 'dich-vu')->get();
$products= \DB::table('products')->get();
?>

<div id="main_menu" >
    <div id="main_mn_container" class="clearfix container">
      <div id='mn_top' class="clearfix">
<a href="index.html" class="first-logo"><img src="upload/hinhanh/041_vi.png" alt="Công ty Cổ phần Toyota Đông Sài Gòn " /></a>
<ul class="clearfix">

<li class="<?php echo e((Request::is('/') ? 'active' : '')); ?> trangchu"><a href='index.html'>
<span>Trang chủ</span></a>
</li>
<li class="<?php echo e((Request::is('/gioi-thieu.html') ? 'active' : '')); ?> has-sub"><a href='gioi-thieu.html' ><span>Giới thiệu</span></a>
</li>
<li class="<?php echo e((Request::is('/san-pham.html') ? 'active' : '')); ?> has-sub"><a href='san-pham.html' ><span>Xe mới</span></a>

<div class="xe-box-main clearfix">
<div class="xe-box-wrap clearfix">

<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="xe-box">
    <div class="items">
    <a href="<?php echo e(route('product_details', ['slug'=> $row->slug, 'id'=> $row->id])); ?>">
      <img src="<?php echo e($row->thumb); ?>" alt="<?php echo e($row->name); ?>" />
      <h3><?php echo e(strtoupper($row->parent)); ?></h3>
    </a>
    <div class="xe-content-main">
        <div class="col-sm-12 col-md-8">
      <div class="xe-info clearfix">
        <div class="xe-features">
           <h2 class="text-uppercase"><?php echo e($row->parent); ?></h2> 
            <p>Giá từ: <span><?php echo e($row->price); ?> VNĐ</span></p>
          <p class="desc"><?php echo e($row->description); ?></p>
          <ul class="clearfix features-list">
          <li><i class="fa fa-wrench" aria-hidden="true"></i> <a href="<?php echo e(route('product_details', ['slug'=> $row->slug, 'id'=> $row->id])); ?>#gioithieuchung">Giới thiệu chung</a></li>
          <li><i class="fa fa-wrench" aria-hidden="true"></i> <a href="<?php echo e(route('product_details', ['slug'=> $row->slug, 'id'=> $row->id])); ?>#dacdiemxe">Đặt điểm nổi bật</a></li>
          <li><i class="fa fa-wrench" aria-hidden="true"></i> <a href="<?php echo e(route('product_details', ['slug'=> $row->slug, 'id'=> $row->id])); ?>#thongsoxe">Thông số</a></li>
          <li><i class="fa fa-wrench" aria-hidden="true"></i> <a href="du-toan-chi-phi.html">Ước tính giá</a></li>
                            </ul>
      </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <img src="<?php echo e($row->image); ?>" alt="<?php echo e($row->name); ?>" style="width: 500px; margin-top: 50px; margin-left: -170px;"/>
    </div>

    </div>
    </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>
</div>
</li>
<li class=" has-sub"><a href='http://www.toyotadaquasudung.com/' target="_blank"><span>Xe cũ</span></a>
</li>
<li class=" has-sub longcat"><a href='dich-vu.html' ><span>Dịch vụ</span></a>
<ul>
<?php $__currentLoopData = $service_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><a href="dich-vu/<?php echo e($row->slug); ?>-<?php echo e($row->id); ?>.html"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo e($row->name); ?></a></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>     </li>




<li class=" longcat has-sub"><a href='tin-tuc.html'>
<span>Tin tức</span></a>
<ul>
<li><a href="tin-tuc/hoat-dong-tesc"><i class="fa fa-angle-right" aria-hidden="true"></i> Hoạt động TESC</a></li>
 
       <li><a href="tin-tuc/thi-truong-oto"><i class="fa fa-angle-right" aria-hidden="true"></i> Thị trường Ôtô</a></li>
 
</ul>    </li>
<li class="<?php echo e((Request::is('/tuyen-dung.html') ? 'active' : '')); ?> "><a href='tuyen-dung.html'>
<span>Tuyển dụng</span></a>
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