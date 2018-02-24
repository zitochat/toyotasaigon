<?php $__env->startSection('content'); ?>
<div class="container main-container clearfix ">
        <section id="main">
        <h2 class="title-main">Xe mới</h2>
        <div id="pro_demo" class="clearfix">
 
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="car-it">
            <div class="car">
                <a href="<?php echo e(route('product_details', ['slug'=> $row->slug, 'id'=> $row->id])); ?>" title="<?php echo e($row->name); ?>"><p class="carname"><?php echo e($row->name); ?></p></a>
                <p class="carprice"><?php echo e($row->price); ?></p>
                <a href="<?php echo e(route('product_details', ['slug'=> $row->slug, 'id'=> $row->id])); ?>" title="<?php echo e($row->name); ?>">
                    <img src="<?php echo e($row->thumb); ?>" class="<?php echo e($row->name); ?>" style=" max-width: 100%;"></a>
                <div class="cardesc text-justify">
                <?php echo e(str_limit(strip_tags($row->description), 100)); ?>    
                </div>
                <div class="carbtn">
                <a href="du-toan-chi-phi?slug=<?php echo e($row->parent); ?>" class="cardtcp">Dự toán chi phí</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="clear"></div>                                 
              
        <div class="wrap_paging">
                <div class="paging paging_ajax clearfix">
                    <ul class="pages">
                            <?php echo e($products->links('frontend.pagination.default')); ?>   
                    <div class="clear"></div></ul></div>
            </div><!--end wrap_paging-->     
    
    
          
            <div class="clear"></div>
            </section>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>