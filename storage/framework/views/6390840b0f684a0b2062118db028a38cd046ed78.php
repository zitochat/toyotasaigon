<?php
$service_list= \DB::table('posts')->where('parent', 'dich-vu')->get();
$vehicles= DB::table('vehicles')->orderBy('slug')->get();
$products= \DB::table('products')->get();
foreach($vehicles as $vehicle) {
  $vehicle->product= $products->where('parent', $vehicle->slug)->sortBy('name');
}

?>

<!DOCTYPE html>
<html lang="en-US"  xmlns:fb="http://www.facebook.com/2008/fbml"><!--<![endif]-->
<head>
<?php echo $__env->make('frontend.layouts.seo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>    
<body class="">
<script language="javascript">
      function addtocart(pid){
        document.form1.productid.value=pid;
        document.form1.command.value='add';
        document.form1.submit();
        return false;       
      }
    </script>
        <form name="form1" action="index.php">
            <input type="hidden" name="productid" />
            <input type="hidden" name="command" />
        </form>
    <div id="wrapper_main">
            
      <!--end #banner_main-->
     <?php echo $__env->make('frontend.layouts.main_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!--end #main_menu-->
            
            <a class="show-menumb-icon" href="#menu-mb-ll"><span><i class="fa fa-bars"></i> Menu</span></a>
            
      <?php echo $__env->make('frontend.layouts.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <div class="notaside">
      <div class="hotlinepanel" style="position: fixed"><p><i class="fa fa-phone-square" aria-hidden="true"></i>
        <a href="tel:01219006066">012 1900 6066</a> - <a href="tel:0976848707">0976 848 707</a>
      </p></div>

      <?php echo $__env->yieldContent('content'); ?>

      <?php echo $__env->make('frontend.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	        
      </div>
      
<nav id="menu-mb-ll">
  <aside class="search" style="display:none">
    <input type="submit" value="" name="btn-search-mobile"  >
    <input type="search" name="search-mobile" id="search-mobile"  value=""/>
  </aside>
  <ul class="clearfix">
    <li class="  trangchu"><a href='/index.html'>
      <span>Trang chủ</span></a>
    </li>
<li class=" has-sub"><a><span>Giới thiệu</span></a>
  <ul>
    <li><a href="/gioi-thieu/ve-toyota-dong-sai-gon-10.html"><span>Về Toyota Đông Sài Gòn</span></a></li>
    <li><a href="/ve-chung-toi"><span>Về chúng tôi</span></a></li>
  </ul>
</li>
     <li class=" has-sub"><a href='/san-pham.html' ><span>Xe mới</span></a>
<ul>
<?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><span><?php echo e($vehicle->name); ?></span>
<ul>
  <?php $__currentLoopData = $vehicle->product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li><a href="<?php echo e(route('product_details', ['slug'=> $row->slug, 'id'=> $row->id])); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo e($row->name); ?></a></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

     </li>
      <li class=" has-sub"><a href='http://www.toyotadaquasudung.com/' target="_blank"><span>Xe cũ</span></a>
     </li>
     <li class=" has-sub"><a href='/dich-vu.html' ><span>Dịch vụ</span></a>
     <ul >
     <?php $__currentLoopData = $service_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><a href="dich-vu/<?php echo e($row->slug); ?>-<?php echo e($row->id); ?>.html"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo e($row->name); ?></a></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>     
     </li>
     
    <li class=" "><a href='/tin-tuc.html'>
      <span>Tin tức</span></a>
      <ul >           <li><a href="/tin-tuc/hoat-dong-tesc">Hoạt động TESC</a></li>
           
                 <li><a href="/tin-tuc/thi-truong-oto">Thị trường Ôtô</a></li>
           
      </ul>    </li>
    <li class="active "><a href='/tuyen-dung.html'>
      <span>Tuyển dụng</span></a>
    </li>
    <li class=" last"><a href='/lien-he.html'>
      <span>Liên hệ</span></a>
    </li>
      
    
    
  </ul>
</nav>      
      </div>

      <div class="hide">
        <div id="xpop" style="display: none;">
          <div class="popup-main" style="background-image:url(upload/hinhanh/285_vi.jpg)">
                </div>
        </div>
      </div>

    </div>
    <!--end #wrapper_main--> 
        <script type="text/javascript" src="http://toyotasaigon.com/myscript.js"></script>
         <!--SIMPLYSCROLL-->
        <!--END SIMPLYSCROLL-->
  <style>
#top {
    background: url(images/icon_gotop.png) no-repeat 0 0;   border-radius: 50%;   bottom: 30px;   color: #fff;   cursor: pointer;   display: none;   font-weight: 500;   right: 30px;   padding: 11px 0;   position: fixed;   text-align: center;   width: 40px;   height: 40px;   z-index: 100000;   right: 10px;
}
#top img{
  width:100%;
}
</style>
<script type="text/javascript">
  $(document).ready(function() {
    /*BACKTOP*/
			$('body').append('<div id="top" ></div>');
		$(window).scroll(function() {
			if($(window).scrollTop() > 100) {
				$('#top').fadeIn();
			} else {
				$('#top').fadeOut();
			}
	   	});
	   	$('#top').click(function() {
			$('html, body').animate({scrollTop:0},500);
	   	});
  });
</script>

<?php echo $__env->make('frontend.layouts.facebook', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<style type="text/css">

</style>
    </body>
</html>