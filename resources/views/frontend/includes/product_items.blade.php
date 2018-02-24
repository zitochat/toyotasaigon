<div class="box_items_slick">
@foreach($items->where('type', 'slider') as $row)
<div class="image-slick">
        <a href="javascript:void(0)"><img src="{{ $row->image }}" alt="" /></a>
</div>
@endforeach              
</div>


<div class="imgcons clearfix container">
@foreach($items->where('type', 'thumb') as $row)    
        <a href="{{ $row->image }}" class="fancymota various" rel="galmota11179" title="<h2>{{ $row->name }}</h2><p><p>{{ strip_tags($row->description) }}</p>
</p>">
          <img class="img-responsive" src="{{ $row->image }}" alt="">
          <h6>{{ $row->name }}</h6>
        </a>
@endforeach
</div>
