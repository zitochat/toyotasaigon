<?php
$prices= DB::table('products')->where('parent', $parent->slug)->get();
?>
<div class="row clearfix">
    <div class="col-sm-12 col-md-6">
          <div class="text-right">
          <img src="<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>" class="img-responsive hinhgiaxe">
          </div>
          <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <p class="infoxemoi"><span class="name"><?php echo e($row->name); ?></span><span class="price"><?php echo e($row->price); ?></span></p>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <p class="vat text-center">(Đã bao gồm VAT)</p>
        </div>
        <div class="col-sm-12 col-md-6 infoxextra">
        
          <h6 class="title-prdetail">Muốn sỡ hữu ngay!</h6>
          <p class="title-desc">Liên hệ với chúng tôi để biết thêm chi tiết</p>
        <a href="du-toan-chi-phi?slug=<?php echo e($row->parent); ?>" class="dutoanlink"><img src="images/dutoan.png" alt="dutoan"></a>
    </div>
</div>