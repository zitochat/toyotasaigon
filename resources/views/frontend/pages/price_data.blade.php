
@php
function format($str)
{
    return number_format($str, 0 , ' , ' ,  '.');
}
@endphp

    <div style="width:700px;" id="chiphidetail_1" class="ChiPhiDetail">
		<div id="content-right">
			<div class="right-title">Chi phí dự tính</div>
			<div class="ChiPhiComContent">
				<div class="ChiPhiDetailLeft">
					<table border="0">
						<tbody><tr>
							<td width="230" class="ChiPhiDetailMain"><strong>Giá xe</strong></td>
                        <td align="Right" class="ChiPhiDetailMain"><strong>{{ format($price_data->gia_xe) }}</strong></td>
						</tr>
						<tr>
							<td width="220" class="ChiPhiDetailOther"><strong>Lệ phí trước bạ</strong></td>
							<td align="Right"></td>
						</tr>
						<tr>
							<td width="220" class="ChiPhiDetailItem">Mức phí</td>
							<td align="Right"><strong>{{ $price_data->muc_phi }} %</strong></td>
						</tr>
						<tr>
							<td width="220" class="ChiPhiDetailItem">Phí</td>
							<td align="Right"><strong>{{ format($price_data->gia_xe * $price_data->muc_phi / 100) }}</strong></td>
						</tr>
						<tr>
							<td width="220" class="ChiPhiDetailOther"><strong>Lệ phí đăng ký</strong></td>
							<td align="Right"><strong>{{ format($price_data->dang_ky) }}</strong></td>
						</tr>
						<tr>
							<td width="220" class="ChiPhiDetailOther"><strong>Lệ phí kiểm định</strong></td>
							<td align="Right"><strong>{{ format($price_data->dang_kiem) }}</strong></td>
						</tr>
						<tr>
							<td width="220" class="ChiPhiDetailOther"><strong>Lệ phí sử dụng đường bộ/năm</strong></td>
							<td align="Right"><strong>{{ format($price_data->duong_bo) }}</strong></td>
						</tr>
						<tr>
							<td width="220" class="ChiPhiDetailOther"><strong>Bảo hiểm trách nhiệm dân sự/năm</strong></td>
							<td align="Right"><strong>{{ $price_data->bao_hiem }}</strong></td>
						</tr>
						<tr>
							<td width="230" class="ChiPhiDetailMain"><strong>Tổng chi phí đăng ký</strong></td>
							<td align="Right" class="ChiPhiDetailMain"><strong>{{ format($price_data->tong) }}</strong></td>
						</tr>
					</tbody></table>
					<div class="ChiPhiTotal">
						<table border="0">
							<tbody><tr>
								<td width="230" class="ChiPhiTotalIn"><strong>Tổng cộng</strong></td>
                            <td align="Right" class="ChiPhiTotalIn"><strong>{{ format($total) }}</strong></td>
							</tr>
						</tbody></table>
					</div>
				</div>
				<div class="ChiPhiDetailRight">
                <div class="ChiPhiHinhXe"><img src="{{ $product->image }}"></div>
                <div class="ChiPhiTenXe">{{ $product->name }}</div>
				</div>
				<div class="Clear"></div>
				<div onclick="hide(1);" class="ChiPhiCloseButton"></div>
			</div>
   </div>
 </div>
<style>
#content-right {
    float: right;
    overflow: hidden;
    padding: 0;
    width: 700px;
}
#content-right .right-title {
    background: url(images/tragoptitle.png) no-repeat scroll 0 0 rgba(0, 0, 0, 0);
    color: #393939;
    display: block;
    font-size: 14px;
    font-weight: bold;
    height: 42px;
    line-height: 36px;
    margin: 0;
    overflow: hidden;
    text-align: center;
    text-transform: uppercase;
}

.ChiPhiComContent {
    background: url("http://toyotaphumyhung.com.vn/themes/css/../img/com-content.png") repeat-y scroll 0 0 rgba(0, 0, 0, 0);
    font-size: 12px !important;
    overflow: hidden;
    padding: 10px 0 0 18px;
}
.ChiPhiDetailLeft {
    float: left;
    width: 360px;
}

.ChiPhiDetailRight {
    background: none repeat scroll 0 0 #f6f6f6;
    float: right;
    height: 250px;
    margin: 0 20px 0 0;
    padding: 50px 0 0;
    width: 290px;
}

.ChiPhiTotal {
    border-top: 1px solid #ccc;
    padding: 10px 0 0;
}

.ChiPhiDetailLeft td.ChiPhiDetailMain {
    color: #333;
    font-size: 16px;
    line-height: 30px;
}

.ChiPhiHinhXe {
    margin: 0 auto 5px;
    width: 200px;
}

.ChiPhiTenXe {
    font-family: Tahoma;
    font-size: 14px;
    font-weight: bold;
    text-align: center;
}
.ChiPhiTotalIn {
    color: #d9221a;
    font-size: 18px;
    line-height: 30px;
	font-weight:bold;
}
</style>
