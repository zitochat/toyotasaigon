<?php $__env->startSection('content'); ?>
<?php echo $__env->make('frontend.home.slide_show', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div style="max-width: 100%">
<?php echo $__env->make('frontend.home.slick-slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php echo $__env->make('frontend.home.test-driver', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('frontend.home.muatragop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('frontend.home.dangkylaithu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('frontend.home.distribution', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>