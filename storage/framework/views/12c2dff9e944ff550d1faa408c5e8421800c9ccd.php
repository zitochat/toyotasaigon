<?php
$products1= DB::table('products')->whereIn('parent', ['vios', 'innova', 'corolla-altis'])->get();
$products2= DB::table('products')->whereIn('parent', [ 'camry', 'fortuner'])->get();
?>
<br/>
<h2 class="title-main">&nbsp;&nbsp;&nbsp;Sản phẩm bán chạy</h2>

<div class="product_slider1 container-fluid">
<?php $__currentLoopData = $products1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div style="position:relative;padding: 20px 0px;min-height: 187px;padding: 20px 5px;margin-left: 1px;margin-right: 1px;background: linear-gradient(to bottom, #ffffff 1%,#f1f2f2 100%);border: 1px solid #e1e1e1;">
<div class="row">
  <div class="col-md-12 col-xs-12">
      <a href="/san-pham/<?php echo e($row->slug); ?>-<?php echo e($row->id); ?>.html"><img src="<?php echo e($row->image); ?>" style="width: 100%"/></a>
  </div>
  <div class="col-md-12 col-xs-12" style="position: absolute;bottom:0px">
      <div style="text-align: left">
          <a href="/san-pham/<?php echo e($row->slug); ?>-<?php echo e($row->id); ?>.html"><b style="color: #000"><?php echo e($row->name); ?></b></a><br/>
          <b style="color:red;font-size: 14px">Giá: <?php echo e($row->price); ?></b>
          
      </div>
      </div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<div class="product_slider2 container-fluid">
    <?php $__currentLoopData = $products2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div style="position:relative;padding: 20px 0px;min-height: 187px;padding: 20px 5px;margin-left: 1px;margin-right: 1px;background: linear-gradient(to bottom, #ffffff 1%,#f1f2f2 100%);border: 1px solid #e1e1e1;">
    <div class="row">
      <div class="col-md-12 col-xs-12">
          <a href="/san-pham/<?php echo e($row->slug); ?>-<?php echo e($row->id); ?>.html"><img src="<?php echo e($row->image); ?>" style="width: 100%"/></a>
      </div>
      <div class="col-md-12 col-xs-12" style="position: absolute;bottom:0px">
          <div style="text-align: left">
              <a href="/san-pham/<?php echo e($row->slug); ?>-<?php echo e($row->id); ?>.html"><b style="color: #000"><?php echo e($row->name); ?></b></a><br/>
              <b style="color:red;font-size: 14px">Giá: <?php echo e($row->price); ?></b>
              
          </div>
          </div>
    </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>



<br/>



<link rel="stylesheet" href="http://toyotasaigon.com/js/camera/css/camera.css" type="text/css" media="all">

  <script type="text/javascript" src="<?php echo e(asset('js/camera/scripts/jquery.easing.1.3.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('js/camera/scripts/camera.min.js')); ?>"></script>

    <script type="text/javascript">
      function createSlick(){  
        $(".product_slider1, .product_slider2").not('.slick-initialized').slick({
          dots: false,
          autoplay:true,
          arrows:false,
          infinite: true,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 1,
          responsive: [
        {
          breakpoint: 1034,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true
          }
        },
        
        {
          breakpoint: 810,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true
          }
        },
        {
          breakpoint: 610,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 330,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }

      ]
        });

        $(".news-nb-wrap").not('.slick-initialized').slick({
          dots: false,
          autoplay:true,
          arrows:false,
          infinite: true,
          speed: 300,
          slidesToShow: 2,
          slidesToScroll: 1,
          responsive: [
        {
          breakpoint: 1034,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true
          }
        },
        
        {
          breakpoint: 810,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true
          }
        },
        {
          breakpoint: 610,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 330,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }

      ]
      });	
      
      }
      
        createSlick();
        $(window).on( 'resize', createSlick );
        </script>
        <script type="text/javascript" src="js/my_script_check_form.js"></script>
        <script type="text/javascript" src="admin/js/script_gaconit.js"></script>