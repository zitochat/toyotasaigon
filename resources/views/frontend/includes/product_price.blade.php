@php
$prices= DB::table('products')->where('parent', $parent->slug)->get();
@endphp
<div class="row clearfix">
    <div class="col-sm-12 col-md-6">
          <div class="text-right">
          <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-responsive hinhgiaxe">
          </div>
          @foreach($prices as $row)
          <p class="infoxemoi"><span class="name">{{ $row->name }}</span><span class="price">{{ $row->price }}</span></p>
          @endforeach
        <p class="vat text-center">(Đã bao gồm VAT)</p>
        </div>
        <div class="col-sm-12 col-md-6 infoxextra">
        
          <h6 class="title-prdetail">Muốn sỡ hữu ngay!</h6>
          <p class="title-desc">Liên hệ với chúng tôi để biết thêm chi tiết</p>
        <a href="du-toan-chi-phi?slug={{ $row->parent }}" class="dutoanlink"><img src="images/dutoan.png" alt="dutoan"></a>
    </div>
</div>