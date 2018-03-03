<?php
$posts= DB::table('posts')->orderBy('id')->get()->take(10);
?>

<p class="title-main">&nbsp;&nbsp;&nbsp;Bài viết mới</p>
<div class="container-fluid">
<div id="new_post" class="row">
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-6 col-xs-12" style="min-height: 115px">
    <a href="/tin-tuc/<?php echo e($row->slug); ?>-<?php echo e($row->id); ?>.html">
  <div class="row" style="padding-bottom: 10px; border-bottom: 1px solid #A5A5A5;">
    <div class="col-md-3 hidden-xs">
        <img src="<?php echo e($row->thumb); ?>" alt="<?php echo e($row->name); ?>" class="image_new" style="width: 108px; height: 120px; border: 1px solid #eee; margin-top: 5px; box-shadow: 1px 1px 7px #23222259;"/>
    </div>
    <div class="col-md-9 col-xs-12">
        <h3 style="color: #000"><?php echo e($row->name); ?></h3>
        <p style="color: #888"><?php echo e(str_limit(strip_tags( $row->content ), 100)); ?></p>
      </div>
  </div>
    </a>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>

<style type="text/css">
.news-box.horizal-news img {
  height: 81px !important;
}
  </style>