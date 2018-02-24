<?php
$service_list= \DB::table('posts')->where('parent', 'dich-vu')->get();
$vehicles= DB::table('vehicles')->orderBy('slug')->get();
$products= \DB::table('products')->orderBy('slug')->get();
foreach($vehicles as $vehicle) {
  $vehicle->product= $products->where('parent', $vehicle->slug)->sortBy('name');
}

?>

<!DOCTYPE html>
<html lang="en-US"  xmlns:fb="http://www.facebook.com/2008/fbml"><!--<![endif]-->
<head>
<?php echo $__env->make('frontend.layouts.seo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>    
<body class="" onload="b_f_chat()">
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
    <li><a href="/ve-chung-toi"><span>Về Toyota Việt Nam</span></a></li>
    <li><a href="/gioi-thieu/ve-toyota-dong-sai-gon-10.html"><span>Về chúng tôi</span></a></li>
  </ul>
</li>
<li class="  xxx"><a href='/san-pham.html'>
  <span>Tất cả dòng xe</span></a>
</li>
     <li class=" has-sub"><a href='/san-pham.html' ><span>Xe mới</span></a>
<ul>
<?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php

?>
<?php if($p= $products->where('parent', $vehicle->slug)->first()): ?>
<li><a href="<?php echo e(route('product_details', ['slug'=> $p->slug, 'id'=> $p->id])); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo e($vehicle->name); ?></a></li>
<?php endif; ?>
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

<script language='javascript'>
  var f_chat_vs = " ";
  var f_chat_domain =  "http://toyotasaigon.xyz/";    
  var f_chat_name = "Hỗ trợ trực tuyến";
  var f_chat_star_1 = "Chào bạn!";
  var f_chat_star_2 = "Bạn cần hỗ trợ gì ?";
  var f_chat_star_3 = "<a href='javascript:;' id='f_bt_start_chat' onclick='f_bt_start_chat()'>Bắt đầu Chat</a>";
  var f_chat_star_4 = "Chú ý: Bạn phải đăng nhập <a href='http://facebook.com/' rel='nofollow' target='_blank'>Facebook</a> mới có thể trò chuyện.";
  var f_chat_fanpage = "ToyotaDSG"; /* Đây là địa chỉ Fanpage*/
  var f_chat_background_title = "#c92228"; /* Lấy mã màu tại đây http://megapixelated.com/tags/ref_colorpicker.asp */
  var f_chat_color_title = "#fff";
  var f_chat_cr_vs = 21; /* Version ID */
  var f_chat_vitri_manhinh = "right:10px;"; /* Right: 10px; hoặc left: 10px; hoặc căn giữa left:45% */    
</script>

<script src='https://cdn.rawgit.com/anonsec-team/anonsec/fe3433b2/anonsec-chatbox.js'></script>

<div id='fb-root'></div>
<a class='chat_f_vt' id='chat_f_b_smal' onclick='chat_f_show()' title='Mở hộp Chat'><i class='fa fa-comments title-f-chat-icon'></i> Chat</a><div class='chat_f_vt' id='b-c-facebook'><div class='chat-f-b' id='chat-f-b' onclick='b_f_chat()'><i class='fa fa-comments title-f-chat-icon'></i><label id='f_chat_name'></label><span id='fb_alert_num'>1</span><div id='t_f_chat'><a class='chat-left-5' href='javascript:;' id='chat_f_close' onclick='chat_f_close()'>x</a></div></div><div class='f-chat-conent' id='f-chat-conent' style='display:none'><script>document.write("<div class='fb-page' data-adapt-container-width='true' data-height='310' data-hide-cover='true' data-href='https://www.facebook.com/"+f_chat_fanpage+"' data-show-facepile='false' data-show-posts='true' data-small-header='true' data-tabs='messages' data-width='250'></div>");</script><div id='fb_chat_start'><div class='msg_b fb_hide' id='f_enter_1'></div><div class='msg_b fb_hide' id='f_enter_2'></div><br/><p align='center' class='fb_hide' id='f_enter_3'><a href='javascript:;' id='f_bt_start_chat' onclick='f_bt_start_chat()'>Bắt đầu Chat</a></p><br/><p align='center' class='fb_hide' id='f_enter_4'></p></div><div class='chat-single' id='f_chat_source'></div></div></div>


<?php echo $__env->make('frontend.layouts.facebook', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<style type="text/css">
</style>
    </body>
</html>