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
<link rel="stylesheet" href="http://toyotasaigon.com/cssmain/style.css" />
<?php if($action=='edit'): ?>







<div class="tag-hong" id="gioithieuchung">
        <div class="container">
          <ul class="clearfix" id="chode">
            <li class=""><a href="/cpanel_admin/products/outbuilding/<?php echo e($product->slug); ?>">Outbuilding</a></li>
            <li class=""><a href="/cpanel_admin/products/furniture/<?php echo e($product->slug); ?>">Furniture</a></li>
            <li class=""><a href="/cpanel_admin/products/safe/<?php echo e($product->slug); ?>">Safe</a></li>
            <li class=""><a href="/cpanel_admin/products/accessories/<?php echo e($product->slug); ?>">Accessories</a></li>
            <li class="lsttag"><a href="/cpanel_admin/products/operate/<?php echo e($product->slug); ?>">Operate</a></li>
            <li class=""><a href="/cpanel_admin/products/specifications/<?php echo e($product->slug); ?>">Specifications</a></li>
            <li><a href="/cpanel_admin/products/color/<?php echo e($product->slug); ?>">Color</a></li>
            <li><a href="/cpanel_admin/products/price/<?php echo e($product->slug); ?>">Price</a></li>
          </ul>   
          
        </div>
        
      </div>
<?php endif; ?>
<div style="padding: 10px">
        <form action='/cpanel_admin/products/post' method="post">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="action" value="<?php echo e($action); ?>"/>
            <?php if($product->id): ?>
            <input type="hidden" name="product_id" value="<?php echo e($id); ?>"/>
            <?php endif; ?>
            <b>Name</b><br/>
            <input id="name" type="text" name="name" value="<?php echo e($product->name); ?>"/><br/>
            <b>Slug</b>(<span style="color:blue;cursor:pointer" onclick="$('#slug').val(slug($('#name').val()))">Conv</span>)<br/>
            <input id="slug" type="text" name="slug" value="<?php echo e($product->slug); ?>"/><br/>
            
            <b>Thumb</b><br/>
            <div class="x_content">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumb" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input id="thumb" value="<?php echo e($product->thumb); ?>" class="form-control" type="text" name="thumb">
                    </div>
                        <img id="holder" src="<?php echo e(fix_url($product->thumb)); ?>" class="img-responsive"  style="width: 240px; height: 150px; padding: 2px; border: 1px solid #eee;">
                    </div>
                <br/>

                <b>Image</b><br/>
                <div class="x_content">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm_image" data-input="image" data-preview="holder_image" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="image" value="<?php echo e($product->image); ?>" class="form-control" type="text" name="image">
                        </div>
                            <img id="holder_image" src="<?php echo e(fix_url($product->image)); ?>" class="img-responsive"  style="width: 240px; height: 150px; padding: 2px; border: 1px solid #eee;">
                        </div>
                    <br/>
            
            <b>Price</b><br/>
            <input type="text" name="price" value="<?php echo e($product->price); ?>"/><br/>
            
            <b>Parent</b><br/>
            <select name="parent">
                <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option <?php if($vehicle->slug== $product->parent): ?> selected <?php endif; ?> value="<?php echo e($vehicle->slug); ?>"><?php echo e($vehicle->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <br/>
            <br/>
            
            <b>Description</b><br/>
            <textarea id="content" name="description"><?php echo e($product->description); ?></textarea>
            <br/>
            <b>Show in menu:</b><br/>
            <select name="show">
                <option value="1" <?php if($product->show== '1'): ?> selected <?php endif; ?> >Show</option>
                <option value="0" <?php if($product->show== '0'): ?> selected <?php endif; ?> >Hide</option>
            </select>
            <br/>
            <br/>
            <input type="submit" value="Save"/>
            </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>