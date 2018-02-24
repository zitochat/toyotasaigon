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
<a href="/cpanel_admin/products/edit/<?php echo e($id_product); ?>" style="margin-left: 5px;" class="btn btn-primary">Back to Product</a><br/>
<div style="padding: 10px">
    <form action='/cpanel_admin/products/<?php echo e($item); ?>/<?php echo e($slug); ?>/post' method="post">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="action" value="<?php echo e($action); ?>"/>
            <?php if($row->id): ?>
            <input type="hidden" name="item_id" value="<?php echo e($id); ?>"/>
            <?php endif; ?>
            <b>Name</b><br/>
            <input id="name" type="text" name="name" value="<?php echo e($row->name); ?>"/><br/>

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

            <b>Type</b><br/>
            <select name="type">
                <option value="thumb" <?php if($row->type== 'thumb'): ?> selected <?php endif; ?> >Thumb</option>
                <option value="slider" <?php if($row->type== 'slider'): ?> selected <?php endif; ?> >Slider</option>
            </select>
            <br/>
            <br/>

            <b>Description</b><br/>
            <textarea id="content" name="description"><?php echo e($row->description); ?></textarea>
            <br/>
            <input type="submit" value="Save"/>
            </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>