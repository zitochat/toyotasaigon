<div class="box_items_slick">
<?php $__currentLoopData = $items->where('type', 'slider'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="image-slick">
        <a href="javascript:void(0)"><img src="<?php echo e($row->image); ?>" alt="" /></a>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>              
</div>


<div class="imgcons clearfix container">
<?php $__currentLoopData = $items->where('type', 'thumb'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
        <a href="<?php echo e($row->image); ?>" class="fancymota various" rel="galmota11179" title="<h2><?php echo e($row->name); ?></h2><p><p><?php echo e(strip_tags($row->description)); ?></p>
</p>">
          <img class="img-responsive" src="<?php echo e($row->thumb); ?>" alt="">
          <h6><?php echo e($row->name); ?></h6>
        </a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
