<div id="thongsoxe" class="clearfix">
<nav class="title-thongso">
    <p class="title">Thông số kỹ thuật</p>
    <ul>
    <?php
    $c_1= 0;
    ?>
    <?php $__currentLoopData = $specifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><a class="disable-link <?php if($c_1==0): ?> active <?php endif; ?>" href="#" data-id="<?php echo e($row->id); ?>"><?php echo e($row->name); ?></a></li>
    <?php
    $c_1= $c_1 + 1;
    ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</nav>
<div class="thongso-content">
    <?php
    $c_2= 0;
    ?>
    <?php $__currentLoopData = $specifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="thongso-detail thongso-<?php echo e($row->id); ?> <?php if($c_2==0): ?> active <?php endif; ?>"><?php echo $row->content; ?></div>
    <?php
    $c_2= $c_2 + 1;
    ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</div>
</div>