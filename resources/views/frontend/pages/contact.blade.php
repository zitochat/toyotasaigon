@extends('frontend.layouts.master')

@section('content')
<div class="container main-container clearfix">
        <section id="main">
            <div class="">
<div id="contact-page">
    <div class="contact-info">
<div class="support-info">

<div class="wrapper clearfix">

    <div class="box" style="padding-bottom: 20px; max-width: 350px;">

        <ul class="clearfix text-center btntranglienhe">
                                <li class="clearfix">

                <a class="btn-style-01 pull-right" style="width: 226px;" href="/#dangkylaithu">Đăng ký lái thử<i class="fa fa-angle-right"></i>

                </a>
                
            </li>
            <li class="clearfix">

                <a class="btn-style-01 pull-right" style="width: 226px;" href="/#test-driver">Đặt lịch sửa chữa<i class="fa fa-angle-right"></i>
                </a>
                
            </li>
        </ul>


    </div>
    
    <div class="hotline-main-wrap">
                    <p class="title">Chi nhánh Gò Vấp</p>
      <div class="hotlineinfo">
        <p><span>Phone 1:</span> 012 1900 0031</p>
        <p><span>Phone 2:</span> 0976 848 707</p>
                    </div>
      
      <p class="trungtamhotro"> Thanks!</p>
      
    </div>
</div>

</div>
</div>
        <div class="contact-form">
            <p class="title-main">Liên hệ</p>
            <div class="wrapper">
                <div class="note">
                    <p><span style="font-size:18px;"><span style="color:#696969;">Toyota Đông Sài Gòn&nbsp;luôn mong muốn lắng nghe những ý kiến, thắc mắc của Khách hàng và cam kết hỗ trợ Khách hàng.</span></span></p>

<p><span style="font-size:18px;"><span style="color:#696969;">Quý khách có thể liên lạc với chúng tôi thông qua số điện thoại hotline. Hoặc vui lòng điền thông tin theo mẫu phía bên dưới. Chúng tôi sẽ phản hồi cho Quý khách ngay trong thời gian sớm nhất.</span></span></p>

                </div>
                <div class="form">
                    <form action="" id="frmContact">
                            {{ csrf_field() }}
                        <div class="group">
                            <label>Chủ đề </label>
                            <select class="r-input-data" name="subject" id="subject">
                                <option value="2">Kinh doanh</option>
                                <option value="1">Dịch vụ</option>

                            </select>
                        </div>
                        <div class="group">
                            <label>Họ tên </label>
                            <input type="text" id="name" name="name" class="r-input-data">
                        </div>
                        <div class="group">
                            <label>Email </label>
                            <input type="text" id="email" name="email" class="r-input-data">
                        </div>
                        <div class="group">
                            <label>Điện thoại </label>
                            <input type="text" id="phone" name="phone" class="r-input-data">
                        </div>
                                                        <div class="group">
                            <label>Tỉnh:  </label>
                            <select class="r-input-data" name="region" id="region">
                                @foreach($province_list as $row)
                                <option value="{{ $row->provinceid }}">{{ $row->name }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="group">
                            <label>Địa chỉ </label>
                            <input type="text" id="diachi" name="diachi" class="r-input-data">
                        </div>
                        <div class="group">
                            <label>Nội dung </label>
                            <textarea class="r-input-data" rows="2" id="content" name="content"></textarea>
                        </div>
                        <div class="group">
                                                                <button type="button" id="btnsubmit" class="btn-style-01 pull-right">
                                <span>Gửi</span><i class="fa fa-angle-right"></i>
                            </button>
                        </div>
                    </form>

                    <script>
                        function isValidEmailAddress(emailAddress) {
                            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
                            return pattern.test(emailAddress);
                        };
                        $(document).ready(function () {
                            $('#btnsubmit').click(function () {

                                var check = true;


                                if (!isValidEmailAddress($("#email").val())) {
                                    check = false;
                                    alert("Bạn cần nhập đúng định dạng email !");
                                    return false;

                                }

                                if (!$.isNumeric($("#phone").val())) {
                                    check = false;
                                    alert("Bạn cần nhập đúng định dạng số điện thoại !");
                                    return false;

                                }
                                $('#frmContact :input:not(:button)').each(function (index, element) {
                                    if (element.value === '') {
                                        alert("Bạn cần nhập đầy đủ thông tin !");
                                        check = false;
                                        return false;
                                    }

                                });


                                if (check == true) {
                                    $.ajax({
                                        type: "POST",
                                        url: '/lien-he.html',
                                        data: $('#frmContact').serialize(),
                                        success: function (response) {
                                            alert('Bạn đã gửi thông tin thành công !');
                                            window.location = "/lien-he-thanh-cong.html";
                                        }
                                    });
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
        

    </div>
</div>
</section>
</div>
@stop