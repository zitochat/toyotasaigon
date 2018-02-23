<?php $__env->startSection('content'); ?>
<form method="post" style="padding: 10px" action="/cpanel_admin/products/price/<?php echo e($slug); ?>/post">
    <?php echo e(csrf_field()); ?>

    
    <b>Giá xe:</b><br/>
    <input type="text" name="gia_xe" value="<?php echo e($price_data->gia_xe); ?>"/><br/>

    <b>Mức phí (%):</b><br/>
    <input type="text" name="muc_phi" value="<?php echo e($price_data->muc_phi); ?>"/><br/>

    <b>Lệ phí đăng ký:</b><br/>
    <input type="text" name="dang_ky" value="<?php echo e($price_data->dang_ky); ?>"/><br/>

    <b>Lệ phí kiểm định:</b><br/>
    <input type="text" name="dang_kiem" value="<?php echo e($price_data->dang_kiem); ?>"/><br/>

    <b>Lệ phí sử dụng đường bộ/năm:</b><br/>
    <input type="text" name="duong_bo" value="<?php echo e($price_data->duong_bo); ?>"/><br/>

    <b>Bảo hiểm trách nhiệm dân sự/năm:</b><br/>
    <input type="text" name="bao_hiem" value="<?php echo e($price_data->bao_hiem); ?>"/><br/>

    <input type="submit" value="Save"/>
    <br/>
    <br/>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>