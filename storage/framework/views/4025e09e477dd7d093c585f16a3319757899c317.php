<?php $__env->startSection('content'); ?>
<div class="container main-container clearfix">
        <section id="main">
            <div class="">
           <p class="title-main">Tin tức</p>
           <p class="title-list">Hoạt động TESC</p>
            <div class="content-container news-content">
                    
                <?php $__currentLoopData = $tesc_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class=" news-box horizal-news clearfix" data-wow-delay=".5s">
                        <a href="/tin-tuc/<?php echo e($row->slug); ?>-<?php echo e($row->id); ?>.html">
                          
                          <div class="clearfix">
                          <div class="news-img"><img src="<?php echo e($row->thumb); ?>" alt="<?php echo e($row->name); ?>" onerror="this.src='images/no-image-available.png';"><span class="zoom-icon"></span></div>
                          
                          <h3><?php echo e($row->name); ?></h3>
                          <p><?php echo e(strip_tags($row->content)); ?></p>
                          <span class="xemtatca">Xem thêm</span>
                          </div>
                        </a>
                      </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
 
                    <div class="clear"></div>                                 
                    
           <div class="wrap_paging">
                    <div class="paging paging_ajax clearfix">
                        <ul class="pages">
                                <?php echo e($tesc_list->links('frontend.pagination.default')); ?>   
                        <div class="clear"></div></ul></div>
                </div><!--end wrap_paging-->     
        
                <div class="clear"></div>
            </div> 

            <p class="title-list">Thị trường Ôto</p>
            <div class="content-container news-content">
                    
                    <?php $__currentLoopData = $oto_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class=" news-box horizal-news clearfix" data-wow-delay=".5s">
                            <a href="/tin-tuc/<?php echo e($row->slug); ?>-<?php echo e($row->id); ?>.html">
                              
                              <div class="clearfix">
                              <div class="news-img"><img src="<?php echo e($row->thumb); ?>" alt="<?php echo e($row->name); ?>" onerror="this.src='images/no-image-available.png';"><span class="zoom-icon"></span></div>
                              
                              <h3><?php echo e($row->name); ?></h3>
                              <p><?php echo e(strip_tags($row->content)); ?></p>
                              <span class="xemtatca">Xem thêm</span>
                              </div>
                            </a>
                          </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
     
                        <div class="clear"></div>                                 
                        
               <div class="wrap_paging">
                        <div class="paging paging_ajax clearfix">
                            <ul class="pages">
                                    <?php echo e($oto_list->links('frontend.pagination.default')); ?>   
                            <div class="clear"></div></ul></div>
                    </div><!--end wrap_paging-->     
            
                    <div class="clear"></div>
                </div>
                </div>
        </section>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>