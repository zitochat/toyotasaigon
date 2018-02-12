<div id="muatragop">
    <div class="muaxetragop" style=" background: url(upload/hinhanh/723_vi.jpg) repeat 0 bottom;">
        <div class="container">
        <p class="title" id="muatragopxe">Mua xe trả góp</p>
        <ul>
            @foreach($installment as $row)
            <li><a href="{{ route('categories_details', ['category'=> 'tra-gop', 'slug'=>$row->slug, 'id'=> $row->id]) }}">{{ $row->name }}</a></li>
            @endforeach   
        </ul>
      </div>
    </div>
    
    </div>