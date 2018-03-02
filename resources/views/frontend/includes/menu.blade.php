
<div style="flex-direction: row; justify-content: flex-start; display: flex; flex-wrap: wrap; flex: 1; width: 100%;">
@foreach($productx as $row)
<div class="xe-box" sid="{{ $row->id }}">
      <div class="items">
      <a href="{{ route('product_details', ['slug'=> $row->slug, 'id'=> $row->id]) }}">
        <img src="{{ $row->thumb }}" alt="{{ $row->name }}" />
        <h3>{{ str_replace('-', ' ', strtoupper($row->parent)) }}</h3>
      </a>
    <div class="xe-content-main" sid={{ $row->id }}>
          <div class="col-sm-12 col-md-8">
        <div class="xe-info clearfix">
          <div class="xe-features">
             <h2 class="text-uppercase">{{ str_replace('-', ' ', strtoupper($row->parent)) }}</h2> 
              <p>Giá từ: <span>{{ $row->price }} VNĐ</span></p>
            <p class="desc">{{ strip_tags($row->description) }}</p>
            <ul class="clearfix features-list">
            <li><i class="fa fa-wrench" aria-hidden="true"></i> <a href="{{ route('product_details', ['slug'=> $row->slug, 'id'=> $row->id]) }}#gioithieuchung">Giới thiệu chung</a></li>
            <li><i class="fa fa-wrench" aria-hidden="true"></i> <a href="{{ route('product_details', ['slug'=> $row->slug, 'id'=> $row->id]) }}#dacdiemxe">Đặt điểm nổi bật</a></li>
            <li><i class="fa fa-wrench" aria-hidden="true"></i> <a href="{{ route('product_details', ['slug'=> $row->slug, 'id'=> $row->id]) }}#thongsoxe">Thông số</a></li>
            <li><i class="fa fa-wrench" aria-hidden="true"></i> <a href="du-toan-chi-phi.html">Ước tính giá</a></li>
                              </ul>
        </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
          <img src="{{ $row->image }}" alt="{{ $row->name }}" style="width: 500px; margin-top: 50px; margin-left: -170px;"/>
      </div>
  
      </div>
      </div>
      </div>
@endforeach
</div>