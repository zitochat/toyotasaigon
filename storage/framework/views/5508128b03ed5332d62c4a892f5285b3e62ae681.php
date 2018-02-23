<div id="muatragop">
    <div class="muaxetragop" style=" background: url(upload/hinhanh/723_vi.jpg) repeat 0 bottom;">
        <div class="container">
        <p class="title" id="muatragopxe">Mua xe trả góp</p>
        <ul>
            <?php $__currentLoopData = $installment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(route('categories_details', ['category'=> 'tra-gop', 'slug'=>$row->slug, 'id'=> $row->id])); ?>"><?php echo e($row->name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
        </ul>
      </div>
    </div>
    
    </div>