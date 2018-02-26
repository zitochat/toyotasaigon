@extends('frontend.layouts.master')

@section('content')
<link href="http://www.toyota.com.vn/static/css/reset.css?v=1.0.0" rel="stylesheet" type="text/css"/>
<link href="/css/tfs_style.css?r=1519642775" rel="stylesheet" type="text/css"/>

<link href="/css/style_toyota.css?v=1.0.0" rel="stylesheet" type="text/css"/>

<div class="container main-container clearfix">
    <section id="main">
        <div class="">
                <p class="title-main">Dịch vụ tài chính</p>

                <div class="sub_menu">
                        <ul class="menu_dvtc">
                            <li><a title="Sản Phẩm Tài Chính" class="sub1 sptc" href="http://www.toyota.com.vn/dich-vu-tai-chinh/san-pham-dich-vu/">Sản Phẩm Tài Chính</a>
                                <ul class="sub_tc sptc">                	
                                    <li><a href="javascript:;" class="">Truyền thống</a>
                                        <div class="sub_li_menu">
                                            <span>Truyền thống</span>
                                            <div class="hinh_submenu"><img src="http://www.toyota.com.vn/static/images/tfs/xe1.png" alt=""></div>
                                            <div class="text_menu_sub"><b><i>Sản phẩm Truyền thống</i></b>: Thanh toán nợ gốc và lãi hàng tháng/hàng quý. </div>
                                            <div class="lienhe_xemthem">
                                                <a href="/lien-he.html">
                                                    <div class="lienhe_menu_sub"></div>
                                                </a>
                                                <a href="/san-pham-dich-vu/#classic">
                                                    <div class="xemchitiet_menu_sub"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="javascript:;" class="">Balloon</a>
                                        <div class="sub_li_menu">
                                            <span>Balloon</span>
                                            <div class="hinh_submenu"><img src="http://www.toyota.com.vn/static/images/tfs/xe2.png" alt=""></div>
                                            <div class="text_menu_sub"><b><i>Sản phẩm Balloon</i></b>: Thanh toán một phần nợ gốc và lãi hàng tháng/hàng quý. Phần nợ gốc còn lại được thanh toán cuối kỳ.</div>
                                            <div class="lienhe_xemthem">
                                                <a href="/lien-he.html">
                                                    <div class="lienhe_menu_sub"></div>
                                                </a>
                                                <a href="/san-pham-dich-vu/#balloon">
                                                    <div class="xemchitiet_menu_sub"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="javascript:;" class="">50/50</a>
                                        <div class="sub_li_menu">
                                            <span>50/50</span>
                                            <div class="hinh_submenu"><img src="http://www.toyota.com.vn/static/images/tfs/xe.png" alt=""></div>
                                            <div class="text_menu_sub"><b>Sản phẩm 50/50</b>: Thanh toán toàn bộ nợ gốc và lãi một lần vào cuối kỳ.</div>
                                            <div class="lienhe_xemthem">
                                                <a href="/lien-he.html">
                                                    <div class="lienhe_menu_sub"></div>
                                                </a>
                                                <a href="/san-pham-dich-vu/#5050">
                                                    <div class="xemchitiet_menu_sub"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a title="Sản Phẩm Tài Chính" class="sub1 sptc" href="/dich-vu.html">Hướng dẫn khách hàng</a>
                                <ul class="sub_tc sptc">                	
                                    <li><a href="/dieu-kien-dang-ky" class="">Điều kiện đăng ký</a>
                                    </li>
                                    <li><a href="/hoi-dap" class="">Hỏi đáp</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a title="Giới Thiệu" class="sub1 " href="/gioi-thieu.html">Giới Thiệu</a>
                        <ul class="sub_tc"> 
                            <li><a href="/cong-ty-tai-chinh-toyota-viet-nam" title="Công ty Tài chính Toyota Việt Nam" class="">Công ty Tài chính Toyota Việt Nam</a></li>
                            <li><a href="/su-menh-tam-nhin-va-triet-ly" title="Sứ mệnh, tầm nhìn và triết lý" class="">Sứ mệnh, tầm nhìn và triết lý</a></li>
                            <li><a href="/co-hoi-nghe-nghiep" title="CƠ HỘI NGHỀ NGHIỆP" class="">CƠ HỘI NGHỀ NGHIỆP</a></li>
                                               </ul>
                            </li>
                            <li>
                                <a class="calculator_btn" title="Cách Tính" href="/cach-tinh"></a>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>

@yield('contents')




        </div>
    </section>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script defer type="text/javascript" src="http://www.toyota.com.vn/static/js/jquery.bxslider.js"></script>
<script>
    $(document).ready(function(){
      $('.main_banner').bxSlider();
    });
  </script>
@stop