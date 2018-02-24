<?php $__env->startSection('content'); ?>
<table id="show_data" class="display nowrap" cellspacing="0" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Slug</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
<?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($row->id); ?></td>
    <td><?php echo e($row->slug); ?></td>
    <td><?php echo e($row->name); ?></td>
    <td>
    <!--<a class="btn-sm btn-danger" href="/cpanel_admin/vehicles/del/<?php echo e($row->id); ?>">[x]</a>-->
        <a class="btn-sm btn-success" href="/cpanel_admin/vehicles/edit/<?php echo e($row->id); ?>">[E]</a>
    </td>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
<table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>