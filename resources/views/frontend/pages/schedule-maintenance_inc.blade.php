@php
$cn_datlich= DB::table('branch')->get();
$vehicles= DB::table('vehicles')->get();
@endphp
<div id="register-form-test" style="">
        <div class="title">Đặt lịch bảo dưỡng</div>
        <div class="wrapper">
            <div class="note">Chọn dòng xe và khu vực quý khách muốn bảo dưỡng</div>
            <form action="dat-lich-bao-duong-save.html" method="post" id="frmdatlich" name="frmdatlich"> 
                    {{ csrf_field() }}
                

                <input type="hidden" id="website" name="website" value="">
                <input type="hidden" id="showroomid" name="showroomid" value="70">

                <select class="r-input-data" name="vehicles_datlich">
                    <option selected="" value="0">Dòng xe</option>
                    @foreach($vehicles as $row)
                    <option value="{{ $row->slug }}">{{ $row->name }}</option>
                    @endforeach
                </select>

                <select class="r-input-data" name="id_tinhdatlich" id="id_tinhdatlich" style="display: block" onchange="load_huyen_dy(this.value,'#idhuyen_datlich')">
                        <option selected="" value="0">Chọn tỉnh </option>
                        


                </select>
                <input class="r-input-data" type="text" placeholder="Họ tên" id="name_datlich" name="name_datlich">
                <select class="r-input-data" name="idhuyen_datlich" id="idhuyen_datlich" style="display: block">
                    <option selected="" value="0">Chọn quận/huyện</option>

                </select>
                <input class="r-input-data" type="email" placeholder="Email" id="email_datlich" name="email_datlich">
                                            <input class="r-input-data" type="tel" required placeholder="Số điện thoại" id="phone_datlich" name="phone_datlich">
                
                <input class="r-input-data" type="text" placeholder="Biển số" id="bienso_datlich" name="bienso_datlich">
                                                                        
                <select class="r-input-data" name="cn_datlich">
                    <option selected="" value="0">Chi nhánh</option>
                    @foreach($cn_datlich as $row)
                    <option value="{{ $row->slug }}">{{ $row->name }}</option>
                    @endforeach
                </select>

                
                
                
                <div style="clear: both"></div>
                <textarea rows="3" placeholder="Yêu cầu cụ thể" id="require_baoduong" name="require_baoduong" class="input-data-w"></textarea>
                <input class="r-input-data" style="width:100%" type="text" placeholder="Tên dòng xe khác" id="xekhac" name="xekhac">
                 <div style="clear: both"></div>
                                            <input class="r-input-data" type="km" placeholder="Số km đã lái" id="km_datlich" name="km_datlich" >
                <select class="r-input-data" name="months_datlich" id="months">

                    <option selected="" value="-1">-Chọn tháng -</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>

                </select>
                <div class="schedule" id="select_datlich">
                    <ul class='clearfix'>

                        <li class="" date="1"><a>1</a></li>
                        <li class="" date="2"><a>2</a></li>
                        <li class="" date="3"><a>3</a></li>
                        <li class="" date="4"><a>4</a></li>
                        <li class="" date="5"><a>5</a></li>
                        <li class="" date="6"><a>6</a></li>
                        <li class="" date="7"><a>7</a></li>
                        <li class="" date="8"><a>8</a></li>
                        <li class="" date="9"><a>9</a></li>
                        <li class="" date="10"><a>10</a></li>
                        <li class="" date="11"><a>11</a></li>
                        <li class="" date="12"><a>12</a></li>
                        <li class="" date="13"><a>13</a></li>
                        <li class="" date="14"><a>14</a></li>
                        <li class="" date="15"><a>15</a></li>
                        <li class="" date="16"><a>16</a></li>
                        <li class="" date="17"><a>17</a></li>
                        <li class="" date="18"><a>18</a></li>
                        <li class="" date="19"><a>19</a></li>
                        <li class="" date="20"><a>20</a></li>
                        <li class="" date="21"><a>21</a></li>
                        <li class="" date="22"><a>22</a></li>
                        <li class="" date="23"><a>23</a></li>
                        <li class="" date="24"><a>24</a></li>
                        <li class="" date="25"><a>25</a></li>
                        <li class="" date="26"><a>26</a></li>
                        <li class="" date="27"><a>27</a></li>
                        <li class="" date="28"><a>28</a></li>
                        <li class="" date="29"><a>29</a></li>
                        <li class="" date="30"><a>30</a></li>
                        <li class="" date="31"><a>31</a></li>

                        <li class="otherdate" date="32">
<input type="hidden" name="frmbaoduong" value="vbaoduong" />
                            <button type="button" id="subtmitTestdriver" class="btn-style-01 pull-right" data-toggle="" data-target=""  onclick="js_datlich();" style="padding-left: 12px !important;">
                                <span>Đăng ký</span>
                            </button>
                            
                        </li>
                    </ul>

                </div>
                <script type="text/javascript" src="js/my_script_check_form.js"></script>
<script type="text/javascript" src="admin/js/script_gaconit.js"></script>
                <script>

                    function daysInMonth(month, year) {
                        return new Date(year, month, 0).getDate();
                    }


                    ;

                    $("#months").change(function () {
                        var d = new Date();

                        var n = $(this).val();

                        $('.schedule li').each(function () {

                            var countDate = $(this).attr("date");
                            if (countDate > daysInMonth(n, 2016) & countDate != 32) {
                                $(this).css("display", "none");

                            } else {
                                $(this).css("display", "block");
                            }
                        });

                    });

                </script>
                                            
                <input class="r-input-data" type="hidden" id="ngaydatlich" name="ngaydatlich">
                <input class="r-input-data" type="hidden" id="description" name="description">
            </form>

            <div class="contact-info onmobile">
                <div class="support-info">

                    <div class="wrapper">

                        <div class="box" style="">

                            <ul>

                                <li style="text-align: center">

                                    <a class="btn-style-01 pull-right" href="tel:1900.545.591">Gọi điện để đăng kí <i class="fa fa-angle-right"></i>

                                    </a>
                                    <br>
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>
            </div>

            <style>
                .onmobile {
                    display: none;
                }

                @media screen and (max-width: 980px) {
                    .onmobile {
                        display: block;
                    }
                }
            </style>
        </div>
    </div>
    <script>

$('#scheduleID').on('change', function () {
var scheduleID = this.value;
$.getJSON("home/getSchedule?scheduleID=" + this.value, function (data) {
var contentsp = data;
if (!$('.schedule ul li').hasClass("otherdate")) {
    $('.schedule ul li ').removeClass("active");
    $('.schedule ul li ').addClass("disabled");
    $('.schedule ul li ').append('');
}
for (var i = 0; i < contentsp.length; i++) {

    $('.schedule ul li ').each(function () {


        if (contentsp[i].indexOf(" " + $(this).attr("date") + "/" + scheduleID) > -1) {


            $(this).addClass("active");
            $(this).removeClass("disabled");
            $(this).append(' <div class="mytooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner">' + contentsp[i] + ' </div> </div>');

        }

    });

}
});

});
$("li", $(".schedule")).on('click', function () {
$("li", $(".schedule")).removeClass('selected');
$("li", $(".schedule")).removeClass('active');
$(this).addClass('selected');
$(this).addClass("active");
$("#description").val("Ngày :" + $(this).attr("date") + "/" + $("#months").val());
;
});

</script>
<script type="text/javascript">
function load_tinh_dy(id){
$.ajax({
url:'admin/ajax/process_tinhquan.php?_token={{ csrf_token() }}',
type: "POST",
dataType: "html",
data: {
    cmd:'load_tinh',
},
success: function(res){
$(id).html(res);
}
});
}
function load_huyen_dy(id_tinh,id){
$.ajax({
url:'admin/ajax/process_tinhquan.php?_token={{ csrf_token() }}',
type: "POST",
dataType: "html",
data: {
    cmd:'load_huyen',
    id_tinh:id_tinh,
},
success: function(res){
$(id).html(res);
}
});
}

load_tinh_dy('#id_tinhdatlich');



</script>
<script type="text/javascript">
$(document).ready(function() {
$('#select_datlich li').click(function(){
var $ngay=$(this).attr('date');
$('#ngaydatlich').val($ngay);
})

});
</script>
<script type="text/javascript">
function js_datlich(){
if(isEmpty(document.getElementById('name_datlich'), "Vui lòng nhập họ tên")){
document.getElementById('name_datlich').focus();
return false;
}
if(isEmpty(document.getElementById('phone_datlich'), "Vui lòng nhập số điện thoại")){
document.getElementById('phone_datlich').focus();
return false;
}
if(!isNumber(document.getElementById('phone_datlich'), "Số điện thoại không hợp lệ")){
document.getElementById('phone_datlich').focus();
return false;
}
document.frmdatlich.submit();
}

</script>