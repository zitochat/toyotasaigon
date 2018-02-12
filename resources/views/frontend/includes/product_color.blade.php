
<div class="imgxes-main-bg"><div class="container"> <div class="imgxes-main clearfix  col-sm-8 col-md-8 pull-right">  <div class="box-item active">
    <div class="imgxe col-xs-12 col-sm-12 col-md-12">
    <img class="img-responsive" src="{{ $product->image }}" alt="MÀU BẠC">
      </div> 
      <div class="clearfix"></div>
    </div> 
    
    </div>
    <div class="list-item  col-sm-4 col-md-4 pull-left text-center">
      <p class="titlechon">Chọn màu</p>
      <div class="khungmaud">
      @foreach($colors as $row)
      <span class="img" data-id="{{ $row->id }}">
          <div class="image">
            <img src="{{ $row->color_image }}" alt="{{ $row->name }}">
            <span>{{ $row->name }}<br>{{ $row->color_code }}</span>
          </div>
        </span>
      @endforeach
   </div>
    </div>
  </div></div>