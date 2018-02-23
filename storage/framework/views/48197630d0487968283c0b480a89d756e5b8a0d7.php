<?php $__env->startSection('content'); ?>
<div class="container main-container clearfix">
        <section id="main">
            <div class="">
                <p class="title-main ">Dự toán chi phí</p>
                <div class="sanpham clearfix">
    
    
                    <div class="du_toan_l col-sm-12 col-md-6">
                        <div class="PriceLeft">
                            <form name="chiphidutoan" id="chiphidutoan" action="" method="post">
                                <div class="form-group">
                                    <select name="xe" id="xe" class="form-control frmchiphi">
                                    <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($vehicle->slug== $slug): ?> selected <?php endif; ?> value="<?php echo e($vehicle->slug); ?>"><?php echo e($vehicle->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            <div id="xe_info">
                            <div class="form-group">
                                <select class="form-control frmchiphi" name="dongxe" id="dongxe">
                                    <option value="">Chọn dòng xe</option>

                
                </select></div>
                            
                                        </div>
                     
                                        <div class="ChiPhiButton btn btn-danger" href="#chiphidetail_1" id="tinhchiphi">Tính chi phí</div>
                        </form>
                    </div>
                 </div>
                    <div class="du_toan_r col-sm-12 col-md-6">
                        <div id="priceright" class="PriceRight">
                                    <div class="PriceRightIn"> 
           
                        
                  
                          <img src="images/chi-phi-du-tinh-resize1.jpg">
                    
                
                
                </div>
                            </div>
                            
                    </div>
                   
                </div>
                </div>
        </section>
            </div>


<script type="text/javascript">
$('#xe').on('change', function(){
$.get('/ajax_vehicles.php', {slug: $(this).val()}, function(data){
$('#dongxe').html(data);
});
});

<?php if(!empty($slug)): ?>
$.get('/ajax_vehicles.php', {slug: '<?php echo e($slug); ?>'}, function(data){
$('#dongxe').html(data);
});
<?php endif; ?>



$("#tinhchiphi").click(function() {
    $.fancybox.open({
        href: "ajax_price.php",
        type: "ajax",
        ajax: {
            type: "GET",
            data: {
                slug: $('#dongxe').val()
            }
        }
    });
});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>