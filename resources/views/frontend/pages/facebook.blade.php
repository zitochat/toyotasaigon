<html>
    <head>
        <!-- Start Code NgocSang-VipPrao.wAp.sH --><script type="text/javascript" src="http://vipprao.wap.sh/holiday_tet/hoa-dao-roi.js"></script><!-- End Code NgocSang-VipPrao.wAp.sH -->

        
    </head>
    <body>
<style>
    div.avt {
        width: 70px;
        height: 70px;
        display: inline-block;
    }

    body, html{
        margin: auto;
        width: 100%;
        padding: 0;
        background-color: black;
    }
    body{
        background-image:url('https://2.bp.blogspot.com/-_9_P-HZZvQE/Wlx3vyAO0tI/AAAAAAAAKQ4/B3UsqO0MKRwXLPdBVuxD_UrMl97yHFAwwCLcBGAs/s1600/maxresdefault%2B%25281%2529.jpg');
        background-size: cover;
    }
    img.avt{
        margin: 0;
        padding: 0;
        border: 1px solid #f780b1;
        border-radius: 3px;
        box-shadow: 1px 1px 4px #e56ca1;
        width: 70px;
        height: 70px;
    }

    ::-webkit-scrollbar {
        width: 1;
        height: 100
    }
    ::-webkit-scrollbar-button {
        background: transparent
    }
    ::-webkit-scrollbar-track-piece {
        background: transparent
    }
    ::-webkit-scrollbar-thumb {
        background: transparent
    }​
</style>
<div style="text-align:center;width: 805px;margin: auto;">
@foreach($arr as $row)

    @if($row== "0")
        <div class="avt"></div>
    @else
        <img class="avt" src="https://graph.facebook.com/{{ $row }}/picture?type=large&width=300&height=300"/>
    @endif
@endforeach
</div>
</body>
</html>