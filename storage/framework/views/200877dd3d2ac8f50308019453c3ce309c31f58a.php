<div class="news-nb-wrap">
    <?php $__currentLoopData = $news_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="news-nb-it slick-slide slick-current slick-active" tabindex="0" role="option" aria-describedby="slick-slide87" style="width: 458px;" data-slick-index="7" aria-hidden="false">
        <div class="news-nb clearfix">
          <a href="<?php echo e(route('categories_details', ['category'=> 'tin-tuc', 'slug'=> $news->slug, 'id'=> $news->id])); ?>" tabindex="0">
            <div class="img"><img src="<?php echo e($news->thumb); ?>" alt="<?php echo e($news->name); ?>"></div>
            <div class="newsnb-info"><h4><?php echo e($news->name); ?></h4>
            <p class="desc"><?php echo e(str_limit(strip_tags($news->content), 120)); ?></p>
            <p class="text-right"><span class="xemthem">Xem thêm</span></p>
            </div>
          </a>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

  <link rel="stylesheet" href="http://toyotasaigon.com/js/camera/css/camera.css" type="text/css" media="all">

  <script type="text/javascript" src="<?php echo e(asset('js/camera/scripts/jquery.easing.1.3.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('js/camera/scripts/camera.min.js')); ?>"></script>

    <script type="text/javascript">
      function createSlick(){  

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
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
      });	
      
      }
      
        createSlick();
        $(window).on( 'resize', createSlick );
        </script>
        <script type="text/javascript" src="js/my_script_check_form.js"></script>
        <script type="text/javascript" src="admin/js/script_gaconit.js"></script>