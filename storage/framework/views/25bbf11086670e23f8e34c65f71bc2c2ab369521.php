
<div style="flex-direction: row; justify-content: space-around; display: flex; flex-wrap: wrap; flex: 1; width: 100%;">
<?php $__currentLoopData = $productx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="xe-box">
      <div class="items">
      <a href="<?php echo e(route('product_details', ['slug'=> $row->slug, 'id'=> $row->id])); ?>">
        <img src="<?php echo e($row->thumb); ?>" alt="<?php echo e($row->name); ?>" />
        <h3><?php echo e(str_replace('-', ' ', strtoupper($row->parent))); ?></h3>
      </a>
      <div class="xe-content-main">
          <div class="col-sm-12 col-md-8">
        <div class="xe-info clearfix">
          <div class="xe-features">
             <h2 class="text-uppercase"><?php echo e(str_replace('-', ' ', strtoupper($row->parent))); ?></h2> 
              <p>Giá từ: <span><?php echo e($row->price); ?> VNĐ</span></p>
            <p class="desc"><?php echo e(strip_tags($row->description)); ?></p>
            <ul class="clearfix features-list">
            <li><i class="fa fa-wrench" aria-hidden="true"></i> <a href="<?php echo e(route('product_details', ['slug'=> $row->slug, 'id'=> $row->id])); ?>#gioithieuchung">Giới thiệu chung</a></li>
            <li><i class="fa fa-wrench" aria-hidden="true"></i> <a href="<?php echo e(route('product_details', ['slug'=> $row->slug, 'id'=> $row->id])); ?>#dacdiemxe">Đặt điểm nổi bật</a></li>
            <li><i class="fa fa-wrench" aria-hidden="true"></i> <a href="<?php echo e(route('product_details', ['slug'=> $row->slug, 'id'=> $row->id])); ?>#thongsoxe">Thông số</a></li>
            <li><i class="fa fa-wrench" aria-hidden="true"></i> <a href="du-toan-chi-phi.html">Ước tính giá</a></li>
                              </ul>
        </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
          <img src="<?php echo e($row->image); ?>" alt="<?php echo e($row->name); ?>" style="width: 500px; margin-top: 50px; margin-left: -170px;"/>
      </div>
  
      </div>
      </div>
      </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>