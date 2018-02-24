<?php $__env->startSection('content'); ?>
<div class="container main-container clearfix">
    <section id="main">
        <div class="">
            <?php echo $__env->make('frontend.includes.update', array('title'=> 'Tuyển dụng'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>