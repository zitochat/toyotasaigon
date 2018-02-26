<?php $__env->startSection('contents'); ?>
<div class="cnt"><!--Insert content here-->
    <div class="content-calculator">
        <div class="title_main">
            <div class="title">Cách Tính</div>
            <div class="mt5">Vui lòng nhập thông tin bên dưới để tính toán tài chính phù hợp nhất.</div>
        </div>
        <div class="">
            <div class="row">
                <div class="col-md-6">
                        <div class="content-left">
                                <form action="">
                                <input type="hidden" name="ci_csrf_token" value="">
                
                                    <div class="pt22">
                                        <div class="lable">Chọn mẫu xe</div>
                                        <div class="selectct" style="z-index: 10;">
                                            <select id="category" name="category" class="selectbox form-control" sb="44150507">
                                                <option value="0"></option>
                                                                                        <option value="yaris">Yaris</option>
                                                                                        <option value="vios">Vios</option>
                                                                                        <option value="corolla-altis">Corolla Altis</option>
                                                                                        <option value="camry">Camry</option>
                                                                                        <option value="innova">Innova</option>
                                                                                        <option value="fortuner">Fortuner</option>
                                                                                        <option value="land-cruiser-prado">Land Cruiser Prado</option>
                                                                                        <option value="land-cruiser">Land Cruiser</option>
                                                                                        <option value="hilux">Hilux</option>
                                                                                        <option value="hiace">Hiace</option>
                                                                                        <option value="alphard">Alphard</option>
                                                                                </select>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="mt10">
                                        <div class="lable">Chọn dòng xe</div>
                                        <div class="selectct" style="z-index: 9;">
                                            <select class="selectbox form-control" id="model_id"  sb="54384265">
                
                                            </select>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="mt10">
                                        <div class="lable">Giá xe</div>
                                        <div class="slider-price" style="z-index: 8;">
                                            <div class="select">
                                                <input type="text" name="gia_ct" id="gia_ct" class="txt_tfs form-control" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="mt10">
                                        <div class="lable">Giá phụ kiện</div>
                                        <div class="slider-price" style="z-index: 7;">
                                            <div class="select">
                                                <input type="text" name="giaphukien" id="giaphukien" class="txt_tfs form-control" placeholder="Điền số tiền dành cho phụ kiện" style="font-size:17px;text-align:left;">
                                            </div>
                                        </div>
                                        <!--<div class="tooltip">
                                            <div class="content">
                                                <span>Giá phụ kiện</span>
                                                <div class="point"></div>
                                            </div>
                                        </div>-->
                                        <div class="clear"></div>
                                    </div>
                
                                    <div class="mt10">
                                        <div class="lable">Chọn sản phẩm tài chính</div>
                                        <div class="selectct" style="z-index: 8;">
                                            <select class="selectbox form-control" id="chonsanpham" sb="3510605">
                
                                            </select>
                                        </div>
                                        <!--<div class="tooltip">
                                            <div class="content">
                                                <span>Chọn sản phẩm tài chính</span>
                                                <div class="point"></div>
                                            </div>
                                        </div>-->
                                        <div class="clear"></div>
                                    </div>
                                    <div class="mt10">
                                        <div class="lable">Thời hạn vay</div>
                                        <div class="selectct" style="z-index: 8;">
                                            <select class="selectbox form-control" id="nam_ct" sb="41044390">
                
                                            </select>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="mt10 lable_payments">
                                        <div class="lable">Hình thức thanh toán</div>
                                        <div class="radio_hinhthuc" style="z-index: 8;">
                                            <span class="method_precious">
                                            <input disabled class="chonquy" type="radio" name="payments" value="quy"> Theo quý</span>
                                            <span class="method_month">
                                                <input checked class="chonthang" id="chonthang" type="radio" name="payments" value="thang"> Theo tháng</span>
                                        </div>
                                        <!--<div class="tooltip">
                                            <div class="content">
                                                <span>Hình thức thanh toán</span>
                                                <div class="point"></div>
                                            </div>
                                        </div>-->
                                        <div class="clear"></div>
                                    </div>
                                    <div class="mt10">
                                        <div class="lable">Số tiền trả trước</div>
                                        <div class="slider-price" style="z-index: 7;">
                                            <div class="select">
                                                <input type="text" name="tientratruoc" id="tientratruoc" class="txt_tfs form-control">
                                            </div>
                                        </div>
                                        <!--<div class="tooltip">
                                            <div class="content">
                                                <span>Số tiền trả trướcsố tiền trả trướcsố tiền trả trướcsố tiền trả trước</span>
                                                <div class="point"></div>
                                            </div>
                                        </div>-->
                                        <div class="clear"></div>
                                    </div>
                                    <div class="mt10">
                                        <div class="lable label_balloon">Tiền gốc trả cuối kì</div>
                                        <div class="slider-price" style="z-index: 7;">
                                            <div class="select">
                                                <input type="text" name="tiengoc_cuoiki" id="tiengoc_cuoiki" class="txt_tfs form-control" disabled="">
                                            </div>
                                        </div>
                                        <!--<div class="tooltip">
                                            <div class="content">
                                                <span>Tiền gốc trả cuối kì</span>
                                                <div class="point"></div>
                                            </div>
                                        </div>-->
                                        <div class="clear"></div>
                                    </div>
                                    <div class="mt10">
                                        <p class="baoloi" id="err" style="color: rgb(255, 0, 0); height: 20px; font-weight: bold;"></p>
                                    </div>
                                    <div class="note mt30">
                                        <div class="text left">GHI CHÚ: Các giá trị trong bảng tính trên đây là giá trị ước tính và chỉ mang tính chất tham khảo nhằm mục đích cho bạn khái niệm về chi phí ước tính phải trả. Giá xe có thể thay đổi theo từng thời điểm. Để có thông tin và bảng tính chi phí chính xác, xin vui lòng liên hệ&nbsp;
                                        <a title="Dịch vụ tài chính của Toyota" onclick="return evt('tfs','click+contact+tfs','tfs+calculator+click+contact+tfs')" href="http://www.toyota.com.vn/dich-vu-tai-chinh">TFSVN</a>&nbsp;hoặc&nbsp;
                                        <a title="Danh mục Đại lý Toyota" onclick="return evt('tfs','click+search+dealer','tfs+calculator+click+search+dealer')" href="http://www.toyota.com.vn/cong-cu-ho-tro/tim-dai-ly">Đại lý</a> của Toyota</div>
                                        <div class="left"><input type="button" name="" id="tinhlai" class="btn-next" value=""></div>
                                        <div class="clear"></div>
                                    </div>
                                    <!-- Tiền lãi -->
                                    <input type="hidden" name="interest_rate" id="interest_rate">
                                </form>
                            </div>
                
                </div>
                <div class="col-md-6">
                        <div class="content-right" id="load_tv">
                                <img src="http://www.toyota.com.vn/static/images/tinhvay.jpg" alt="" style="width: 400px; padding: 40px 0px 40px 40px;">
                            </div>
                </div>
            </div>
            



            <div class="clear"></div>
        </div>
    </div>
</div>



<script type="text/javascript">
function number_format (number, decimals, dec_point, thousands_sep) {
	var n = number, prec = decimals;

	var toFixedFix = function (n,prec) {
		var k = Math.pow(10,prec);
		return (Math.round(n*k)/k).toString();
	};

	n = !isFinite(+n) ? 0 : +n;
	prec = !isFinite(+prec) ? 0 : Math.abs(prec);
	var sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep;
	var dec = (typeof dec_point === 'undefined') ? '.' : dec_point;

	var s = (prec > 0) ? toFixedFix(n, prec) : toFixedFix(Math.round(n), prec); //fix for IE parseFloat(0.55).toFixed(0) = 0;

	var abs = toFixedFix(Math.abs(n), prec);
	var _, i;

	if (abs >= 1000) {
		_ = abs.split(/\D/);
		i = _[0].length % 3 || 3;

		_[0] = s.slice(0,i + (n < 0)) +
			  _[0].slice(i).replace(/(\d{3})/g, sep+'$1');
		s = _.join(dec);
	} else {
		s = s.replace('.', dec);
	}

	var decPos = s.indexOf(dec);
	if (prec >= 1 && decPos !== -1 && (s.length-decPos-1) < prec) {
		s += new Array(prec-(s.length-decPos-1)).join(0)+'0';
	}
	else if (prec >= 1 && decPos === -1) {
		s += dec+new Array(prec).join(0)+'0';
	}
	return s;
}

function ajax_get_model(slug)
{
    $.post('http://www.toyota.com.vn/tools/ajax_get_model', {slug: slug, return_json:1}, function(data) {
        let d= JSON.parse(data);

        $('#model_id').html(d.content_html);
        let model_id= d.category_model;
        get_product_by_model(model_id);
    });
}

function get_product_by_model(model_id)
{
    $('#chonsanpham').empty();
    $.post('http://www.toyota.com.vn/tfs_product/get_tfs_product_by_model', {model_id: model_id}, function(data) {
        let d= JSON.parse(data);
        for(let i=0;i<d.length;i++) {
            
            $('#chonsanpham').append($('<option>', {
                value: d[i].type_product,
                text: d[i].tfs_name_vi
            }));
        }
    });

    call_chonsanpham('1');

    get_price($('#model_id').val());
}

function get_price(model_id)
{
    $.post('http://www.toyota.com.vn/tsf/ajax_price', {model_id: model_id}, function(data) {
        $('#gia_ct').val(data);
    });
}

function call_chonsanpham(ids)
{
    if(ids=="1") {
        $('#tientratruoc').attr('placeholder', 'Tối thiểu 15% giá trị xe và phụ kiện')
        $('#chonthang').attr('disabled', false);
        $('#nam_ct').empty();
        $('#nam_ct').html('<option value="1">1 Năm</option><option value="2">2 Năm</option><option value="3">3 Năm</option><option value="4">4 Năm</option><option value="5">5 Năm</option><option value="6">6 Năm</option><option value="7">7 Năm</option>');
    }

    if(ids== "3"){
        $('#tientratruoc').attr('placeholder', 'Tối thiểu 50% giá trị xe và phụ kiện')
        $('#chonthang').attr('disabled',true);
        $('#nam_ct').empty();
        $('#nam_ct').html('<option value="1">1 Năm</option>');
    }
}


function send_data(tong, ids)
{
    let datas= {
        tong_tien_vay: tong,
        tien_cuoiky: 0,
        hinhthuc_vay: ids=="1"?'classic':'5050',
        thoigian_vay: $('#nam_ct').val() * 1,
        hinhthuc_tra: 'thang',
        model_slug: $('#category').val(),
        tien_lai: ids=="1"?6.99:7.99
    };




$.post('http://www.toyota.com.vn/tfs_product/api_tsf_products', datas, function(data) {
    let content= JSON.parse(data);
    $('#load_tv').html(content.content.replace('http://www.toyota.com.vn/dich-vu-tai-chinh/lien-he', '/lien-he.html'));
});
}
$('#category').on('change', function() {
    let slug= $(this).val();
    ajax_get_model(slug);
});

$('#model_id').on('change', function() {
    let model_id= $(this).val();
    get_price(model_id)
});

$('#chonsanpham').on('change', function(){
    var ids= $(this).val();
    call_chonsanpham(ids);
});

$('#tientratruoc').on('input', function(){
    $(this).val(number_format($(this).val().split('.').join(""), 0, ',', '.'));
})

$('#tinhlai').on('click', function() {
    let gia= $('#gia_ct').val().split('.').join("") * 1;
    let ids= $('#chonsanpham').val();
    let tien= $('#tientratruoc').val().split('.').join("") * 1;
    let per= 15;
    if(ids =="1") {per= 15} if(ids=="3") {per=50}

    let calc= gia * per / 100;
    if(tien < calc) {
        $('#err').text('Số tiền tối thiểu là: ' + number_format(calc, 0, ',', '.') + ' VNĐ');
    } else {
        let tong= gia-tien;
        send_data(tong, ids);
    }

});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.dichvutaichinh', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>