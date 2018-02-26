        
<div class="imgcons clearfix container">
        @foreach($items->where('type', 'thumb') as $row)    
                <a rel="phukien" style="text-align: left;height: 205px; border: 1px solid #f3f3f31a;color:black" class="fancymota various phukien" title="<h2>{{ $row->name }}</h2><p><p>{{ strip_tags($row->description) }}</p>
        </p>">
                  <img class="img-responsive" src="{{ $row->image }}" alt="" style="width: 100%">
                  <div style="padding: 3px">
                        <b style="display:block">{{ $row->name }}</b>
                        <b>{!! $row->description !!}</b>
                  </div>
                </a>
        @endforeach
</div>
        

<script type="text/javascript">
$(document).ready(function() {
    $("a.phukien").fancybox();
});
</script>