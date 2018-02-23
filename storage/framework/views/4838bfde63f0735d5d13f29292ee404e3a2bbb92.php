<?php
$cat= DB::table('categories')->get();

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
<a href="/cpanel_admin/products/add" style="margin-left: 5px;" class="btn btn-primary">Add new</a><br/>

<table id="show_data" class="display nowrap" cellspacing="0" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Thumb</th>
                <th>Price</th>
                <th>Parent</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($row->id); ?></td>
    <td style="width: 200px"><?php echo e($row->name); ?></td>
    <td><img src="<?php echo e(fix_url($row->thumb)); ?>" style="width: 100px; height: 50px"/></td>
    <td><?php echo e($row->price); ?></td>
    <td><?php echo e($row->parent); ?></td>
    <td style="width: 90px"><?php echo e(str_limit($row->description, 50, '..')); ?></td>
    <td>
        <a class="btn-sm btn-danger" href="/cpanel_admin/products/del/<?php echo e($row->id); ?>">[x]</a>
        <a class="btn-sm btn-success" href="/cpanel_admin/products/edit/<?php echo e($row->id); ?>">[E]</a>
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
<table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>