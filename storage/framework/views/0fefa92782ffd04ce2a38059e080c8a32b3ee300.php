<?php
function fix_url($str)
{
if(!empty($str)) {
    if(strpos($str, 'http')!== false) {
        return $str;
    } else {
        return URL::to('/') . '/' . $str;
    }
} else {
return '/upload/news/dich-vu-cho-thue-xe-toyota-dong-sai-gon13001.jpg';
}
}
?>

<?php $__env->startSection('content'); ?>
<a href="/cpanel_admin/vehicles" style="margin-left: 5px;" class="btn btn-primary">Back to Vehicles</a><br/>
<br/>
<link rel="stylesheet" href="http://toyotasaigon.com/cssmain/style.css" />
<?php if($action=='edit'): ?>







<div class="tag-hong" id="gioithieuchung">
        <div class="container">
          <ul class="clearfix" id="chode">
            <li class=""><a href="/cpanel_admin/products/outbuilding/<?php echo e($vehicle->slug); ?>">Outbuilding</a></li>
            <li class=""><a href="/cpanel_admin/products/furniture/<?php echo e($vehicle->slug); ?>">Furniture</a></li>
            <li class=""><a href="/cpanel_admin/products/safe/<?php echo e($vehicle->slug); ?>">Safe</a></li>
            <li class=""><a href="/cpanel_admin/products/accessories/<?php echo e($vehicle->slug); ?>">Accessories</a></li>
            <li class="lsttag"><a href="/cpanel_admin/products/operate/<?php echo e($vehicle->slug); ?>">Operate</a></li>
            <li class=""><a href="/cpanel_admin/products/specifications/<?php echo e($vehicle->slug); ?>">Specifications</a></li>
            <li><a href="/cpanel_admin/products/color/<?php echo e($vehicle->slug); ?>">Color</a></li>
            <li><a href="/cpanel_admin/products/price/<?php echo e($vehicle->slug); ?>">Price</a></li>
          </ul>   
          
        </div>
        
      </div>
<?php endif; ?>

<div style="padding: 10px">
<form action='/cpanel_admin/vehicles/post/<?php echo e($id); ?>' method="post">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="action" value="<?php echo e($action); ?>"/>
            <?php if($vehicle->id): ?>
            <input type="hidden" name="slider_id" value="<?php echo e($id); ?>"/>
            <?php endif; ?>
            <b>Name</b><br/>
            <input id="name" type="text" name="name" value="<?php echo e($vehicle->name); ?>"/><br/>
            <b>Slug</b>(<span style="color:blue;cursor:pointer" onclick="$('#slug').val(slug($('#name').val()))">Conv</span>)<br/>
            <input id="slug" type="text" name="slug" value="<?php echo e($vehicle->slug); ?>"/><br/>
                <br/>
            <input type="submit" value="Save"/>
            </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>