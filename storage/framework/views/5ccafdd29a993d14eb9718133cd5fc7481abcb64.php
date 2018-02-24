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
<div style="padding: 10px">
    <form action='/cpanel_admin/products/color/<?php echo e($slug); ?>/post' method="post">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="action" value="<?php echo e($action); ?>"/>
            <?php if($row->id): ?>
            <input type="hidden" name="item_id" value="<?php echo e($id); ?>"/>
            <?php endif; ?>
            <b>Color ID</b><br/>
            <select name="color_id">
                <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($color->id); ?>" <?php if($color->id== $row->color_id): ?> selected <?php endif; ?> ><?php echo e($color->name); ?> (<?php echo e($color->color_code); ?>)</option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <br/>
            <br/>
    

            <b>Image</b><br/>
            <div class="x_content">
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm_image" data-input="image" data-preview="holder_image" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="image" value="<?php echo e($row->image); ?>" class="form-control" type="text" name="image">
                </div>
                <img id="holder_image" src="<?php echo e(fix_url($row->image)); ?>" class="img-responsive"  style="width: 240px; height: 150px; padding: 2px; border: 1px solid #eee;">
            </div>
            <br/>

            
            <br/>
            <input type="submit" value="Save"/>
            </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>