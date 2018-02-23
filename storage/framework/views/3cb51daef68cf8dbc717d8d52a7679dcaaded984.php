
<?php

function get_color($row)
{
  $color_data= DB::table('colors')->get();
  return $color_data->where('id', $row->color_id)->first();
}
?>

<div class="imgxes-main-bg"><div class="container"> <div class="imgxes-main clearfix  col-sm-8 col-md-8 pull-right">  <div class="box-item active">
    <div class="imgxe col-xs-12 col-sm-12 col-md-12">
    <img class="img-responsive" src="<?php echo e($product->image); ?>" alt="MÀU BẠC">
      </div> 
      <div class="clearfix"></div>
    </div> 
    
    </div>
    <div class="list-item  col-sm-4 col-md-4 pull-left text-center">
      <p class="titlechon">Chọn màu</p>
      <div class="khungmaud">
      <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <span class="img" data-id="<?php echo e(get_color($row)->id); ?>">
          <div class="image">
            <img src="<?php echo e(get_color($row)->color_image); ?>" alt="<?php echo e(get_color($row)->name); ?>">
            <span><?php echo e(get_color($row)->name); ?><br><?php echo e(get_color($row)->color_code); ?></span>
          </div>
        </span>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
    </div>
  </div></div>