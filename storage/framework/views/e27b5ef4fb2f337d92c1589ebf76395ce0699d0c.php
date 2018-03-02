<?php $__env->startSection('content'); ?>
<div class="container main-container  clearfix">
        <section id="main">
            <div class="">
           <p class="title-main"><?php echo e($post->name); ?></p>
           <div id="breadcrumb">
               <ul class="breadcrumb">
                   <li><a style="z-index:10" href="/<?php echo e($category); ?>.html"><?php echo e($parent->parent_name); ?></a></li>
                   <li><a style="z-index:9" href="/<?php echo e($category); ?>/<?php echo e($post->slug); ?>-<?php echo e($post->id); ?>.html"><?php echo e($post->name); ?></a></li></ul></div>
           <div class="content-container news-content">
               <?php echo $post->content; ?>

          
            </div> 
                </div>
        </section>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>