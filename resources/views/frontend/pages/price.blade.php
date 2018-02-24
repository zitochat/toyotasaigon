@extends('frontend.layouts.master')

@section('content')
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
                                    @foreach($vehicles as $vehicle)
                                    <option @if($vehicle->slug== $slug) selected @endif value="{{ $vehicle->slug }}">{{ $vehicle->name }}</option>
                                    @endforeach
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
                    
                   
                </div>
<br/>
<br/>
      <img src="images/chi-phi-du-tinh-resize1.jpg" style="max-width: 100%"/>
                </div>
        </section>
            </div>


<script type="text/javascript">
$('#xe').on('change', function(){
$.get('/ajax_vehicles.php', {slug: $(this).val()}, function(data){
$('#dongxe').html(data);
});
});

@if(!empty($slug))
$.get('/ajax_vehicles.php', {slug: '{{ $slug }}'}, function(data){
$('#dongxe').html(data);
});
@endif



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
@stop