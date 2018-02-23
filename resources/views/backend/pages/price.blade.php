@extends('backend.layouts.master')

@section('content')
<form method="post" style="padding: 10px" action="/cpanel_admin/products/price/{{ $slug }}/post">
    {{ csrf_field() }}
    
    <b>Giá xe:</b><br/>
    <input type="text" name="gia_xe" value="{{ $price_data->gia_xe }}"/><br/>

    <b>Mức phí (%):</b><br/>
    <input type="text" name="muc_phi" value="{{ $price_data->muc_phi }}"/><br/>

    <b>Lệ phí đăng ký:</b><br/>
    <input type="text" name="dang_ky" value="{{ $price_data->dang_ky }}"/><br/>

    <b>Lệ phí kiểm định:</b><br/>
    <input type="text" name="dang_kiem" value="{{ $price_data->dang_kiem }}"/><br/>

    <b>Lệ phí sử dụng đường bộ/năm:</b><br/>
    <input type="text" name="duong_bo" value="{{ $price_data->duong_bo}}"/><br/>

    <b>Bảo hiểm trách nhiệm dân sự/năm:</b><br/>
    <input type="text" name="bao_hiem" value="{{ $price_data->bao_hiem }}"/><br/>

    <input type="submit" value="Save"/>
    <br/>
    <br/>
</form>

@stop