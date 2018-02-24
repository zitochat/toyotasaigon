<?php $__env->startSection('content'); ?>
<div class="container main-container clearfix">
    <section id="main">
        <div class="">
            <p class="title-main">Đăng nhập tài khoản</p>
<div class="content-container news-content">
        <form method="post" action="/login">
            <h1>Login</h1>
            <?php echo e(csrf_field()); ?>

            <p>
                <b>Email:</b><br/>
                <input type="email" value="" name="email" style="width: 90%; height: 35px; border-radius: 2px; border: 1px solid #bfbfbf; font-size: 18px; padding: 5px;"/>
            </p>
            
            <p>
                <b>Password:</b><br/>
                <input type="password" name="password" style="width: 90%; height: 35px; border-radius: 2px; border: 1px solid #bfbfbf; font-size: 18px; padding: 5px;"/>
            </p>
            
            <p><input type="submit" value="Login"/></p>
            </form>
<div class="clear"></div>                                 
</div> 
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>