<div id="thongsoxe" class="clearfix">
<nav class="title-thongso">
    <p class="title">Thông số kỹ thuật</p>
    <ul>
    @php
    $c_1= 0;
    @endphp
    @foreach($specifications as $row)
    <li><a class="disable-link @if($c_1==0) active @endif" href="#" data-id="{{ $row->id }}">{{ $row->name }}</a></li>
    @php
    $c_1= $c_1 + 1;
    @endphp
    @endforeach
    </ul>
</nav>
<div class="thongso-content">
    @php
    $c_2= 0;
    @endphp
    @foreach($specifications as $row)
    <div class="thongso-detail thongso-{{ $row->id }} @if($c_2==0) active @endif">{!! $row->content !!}</div>
    @php
    $c_2= $c_2 + 1;
    @endphp
    @endforeach
    
</div>
</div>