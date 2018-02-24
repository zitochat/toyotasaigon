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

$names= array(
    'ĐỘNG CƠ & KHUNG XE',
    'NGOẠI THẤT',
    'NỘI THẤT',
    'TIỆN NGHI',
    'AN TOÀN CHỦ ĐỘNG',
    'AN TOÀN BỊ ĐỘNG'
);
?>

<?php $__env->startSection('content'); ?>
<div style="padding: 10px">
    <form action='/cpanel_admin/products/specifications/<?php echo e($slug); ?>/post' method="post">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="action" value="<?php echo e($action); ?>"/>
            <?php if($row->id): ?>
            <input type="hidden" name="item_id" value="<?php echo e($id); ?>"/>
            <?php endif; ?>
            <b>Name</b><br/>
            <select name="name">
                <?php $__currentLoopData = $names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($name); ?>" <?php if($name== $row->name): ?> selected <?php endif; ?>><?php echo e($name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <br/>
            <br/>
    

            <b>Content:</b><br/>
            <textarea name="content" style="height: 300px"><?php echo e($row->content); ?></textarea>

            
            <br/>
            <input type="submit" value="Save"/>
            </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>