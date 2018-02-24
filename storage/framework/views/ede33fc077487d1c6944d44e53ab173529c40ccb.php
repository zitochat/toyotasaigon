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
<a href="/cpanel_admin/products/specifications/<?php echo e($slug); ?>/add/" style="margin-left: 5px;" class="btn btn-primary">Add new</a><br/>
<table id="show_data" class="display nowrap" cellspacing="0" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td style="width: 10px"><?php echo e($row->id); ?></td>
    <td style="width: 150px"><?php echo e($row->name); ?></td>
    <td><?php echo e(str_limit($row->content, 100)); ?></td>
    <td>
    <a class="btn-sm btn-danger" href="/cpanel_admin/products/specifications/<?php echo e($slug); ?>/del/<?php echo e($row->id); ?>">[x]</a>
        <a class="btn-sm btn-success" href="/cpanel_admin/products/specifications/<?php echo e($slug); ?>/edit/<?php echo e($row->id); ?>">[E]</a>
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
<table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>