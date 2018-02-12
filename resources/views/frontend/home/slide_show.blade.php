<div id="slide_show" class="clearfix main-container">
    <div class="bx-tong camera_wrap clearfix">
    @foreach($sliders as $row)
    <div data-target='_blank' data-src="{{ $row->thumb }}" data-link="{{ $row->url }}">
    </div>
    @endforeach
    </div><!-- end bx-tong -->
    
    
</div>

<script>
        $(document).ready(function() {
        var winw=$(window).width();
        var slheight='50%';
        if(winw>1024) slheight='500px';
        $('.bx-tong').camera({
          
          // height: '540px',
          height: slheight,
          loader: 'none',
          pagination: false,
          thumbnails: false,
          time: 3000, 
          //milliseconds between the end of the sliding effect and the start of the nex one
          transPeriod: 1000,
          // length of the sliding effect in milliseconds
          navigation: true,
          playPause: false
        });
    });
</script>