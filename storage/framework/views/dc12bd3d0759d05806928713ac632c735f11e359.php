<?php
$vehicle= DB::table('vehicles')->where('slug', $product->parent)->first();
?>

<img style="display:inline-block" src="<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>" class="img-responsive">
<a class="text-center text-uppercase downbtn" style="display:block" href="<?php echo e($vehicle->url); ?>"> Download catalog tại đây</a>