        
<div class="imgcons clearfix container">
        <?php $__currentLoopData = $items->where('type', 'thumb'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                <a rel="phukien" style="text-align: left;height: 205px; border: 1px solid #f3f3f31a;color:black" class="fancymota various phukien" title="<h2><?php echo e($row->name); ?></h2><p><p><?php echo e(strip_tags($row->description)); ?></p>
        </p>">
                  <img class="img-responsive" src="<?php echo e($row->image); ?>" alt="" style="width: 100%">
                  <div style="padding: 3px">
                        <b style="display:block"><?php echo e($row->name); ?></b>
                        <b><?php echo $row->description; ?></b>
                  </div>
                </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
        

<script type="text/javascript">
$(document).ready(function() {
    $("a.phukien").fancybox();
});
</script>