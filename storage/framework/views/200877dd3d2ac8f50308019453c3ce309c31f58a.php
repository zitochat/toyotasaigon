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


