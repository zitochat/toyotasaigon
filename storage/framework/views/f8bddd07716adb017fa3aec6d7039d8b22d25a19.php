<?php $__env->startSection('content'); ?>
<style type="text/css">
    .imgxes-main-bg{background:url(upload/hinhanh/23032sl.jpg) no-repeat center 0}
</style>
  <div class="main-container product_detail clearfix">
    <div class="container">
        <div id="breadcrumb">
            <ul class="breadcrumb">
                <li><a style="z-index:10" href="/san-pham.html">Xe mới</a></li>
                <li><a style="z-index:9" href="<?php echo e(route('product_details', ['slug'=> $slug, 'id'=> $id])); ?>"><?php echo e($parent->name); ?></a></li>
            </ul>
        </div>
    </div>
      
    <div class="tag-hong" id="gioithieuchung">
        <div class="container">
              <ul class="clearfix" id="chode">
                <?php if(count($outbuilding) > 0): ?> <li class=""><a href="#" class="disable-link chuyentab active" data-id="1235">Ngoại thất</a></li><?php endif; ?>
                <?php if(count($furniture) > 0): ?><li class=""><a href="#" class="disable-link chuyentab " data-id="1234">Nội thất</a></li><?php endif; ?>
                <?php if(count($operate) > 0): ?><li class=""><a href="#" class="disable-link chuyentab " data-id="1237">Vận hành</a></li><?php endif; ?>
                <?php if(count($safe) > 0): ?><li class=""><a href="#" class="disable-link chuyentab " data-id="1236">An toàn</a></li><?php endif; ?>
                <?php if(count($accessories) > 0): ?><li class="lsttag"><a href="#" class="disable-link chuyentab " data-id="1259">Phụ kiện chính hãng</a></li><?php endif; ?>
                <?php if(count($specifications) > 0): ?><li class=""><a href="#" class="disable-link chuyentab" data-id="dac">Đặc tính<br> kỹ thuật</a></li><?php endif; ?>
                <?php if(count($colors) > 0): ?><li><a href="#" class="disable-link chuyentab" data-id="mau">Màu xe</a></li><?php endif; ?>
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
                <?php echo $__env->make('frontend.includes.product_items', ['items'=> $outbuilding], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="dacdiem-info dd-info-1234 ">
                <?php echo $__env->make('frontend.includes.product_items', ['items'=> $furniture], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="dacdiem-info dd-info-1237 ">
                <?php echo $__env->make('frontend.includes.product_items', ['items'=> $operate], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="dacdiem-info dd-info-1236 ">
                <?php echo $__env->make('frontend.includes.product_items', ['items'=> $safe], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="dacdiem-info dd-info-1259 ">
                <?php echo $__env->make('frontend.includes.phu_kien', ['items'=> $accessories], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="dacdiem-info dd-info-dac">
                <?php echo $__env->make('frontend.includes.product_specifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="dacdiem-info dd-info-mau">
                <?php echo $__env->make('frontend.includes.product_color', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="dacdiem-info dd-info-cata text-center">
                <?php echo $__env->make('frontend.includes.product_catalog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="dacdiem-info dd-info-giaxe">
                <?php echo $__env->make('frontend.includes.product_price', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
              arrows:true,
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
                url:"ajax/product_slider.php?_token=<?php echo e(csrf_token()); ?>",
                type: "POST",
                data: {id:id},
                success: function(data){
                  $(".imgxes-main.clearfix").html(data);
                }
              })
            })
        });
        </script>

<style type="text/css">
    .description_info {
        position: absolute;
        bottom: 0px;
        color: #f3f3f3;
        padding: 20px;
        font-size: 15px;
        font-family: sans-serif;
        background-color: #b5b3b359;
        width: 100%;
        border-top: 1px solid #929292bf;
    }
    .slick-next {
        right: 40px;
    }
    .slick-prev {
        left: 20px;
    }
    .slick-prev:before, .slick-next:before {
        font-size: 50px;
    }
    .slick-prev {
        z-index: 10;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>