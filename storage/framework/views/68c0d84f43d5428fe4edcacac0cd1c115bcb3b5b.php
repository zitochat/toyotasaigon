<div id="dangkylaithu">
    <div id="try_drive" style=" background: url(upload/hinhanh/9232_vi.jpg) repeat 0 bottom;">
      <div class="container clearfix">
        
            <div class="col-md-5 pull-left">
          <h6 class="tit-dk">Đăng ký lái thử</h6>
        <p>Chú ý: Để tham gia đăng ký lái thử với chúng tôi, Quý khách cần có giấy phép lái xe hạng B1 trở lên</p>
        <p>Vui lòng click vào nút đăng ký bên dưới và làm theo hướng dẫn</p>
        <p class="dkbtn text-uppercase"><a class="fancy" href="lai-thu.html"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>Đăng ký</a></p>
        </div>
      </div>
    </div>
    </div>

    <script type="text/javascript">
      function load_tinh_dy(id){
        $.ajax({
          url:'admin/ajax/process_tinhquan.php?_token=<?php echo e(csrf_token()); ?>',
          type: "POST",
          dataType: "html",
          data: {cmd:'load_tinh'},
          success: function(res){
            $(id).html(res);
          }
        });
      }
      function load_huyen_dy(id_tinh,id){
        $.ajax({
          url:'admin/ajax/process_tinhquan.php?_token=<?php echo e(csrf_token()); ?>',
          type: "POST",
          dataType: "html",
          data: {cmd:'load_huyen',id_tinh:id_tinh},
          success: function(res){
            $(id).html(res);
          }
        });
      }
      $(document).ready(function() {
        load_tinh_dy('#id_tinhdatlich');
        load_tinh_dy('#id_tinhphutung');
      
      });
      
      </script>