<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css"/>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style type="text/css">
  #hor_menu {
    border: none !important;
  }
#show_data_filter {
    margin-right: 10px;
}
#show_data_length {
  margin-left: 5px;
}
    .pushmenu {
      text-align: center;
      font-family: Tahoma, Geneva, sans-serif;
      width: 220px;
      height: 100%;
      top: 0;
      z-index: 1000;
      position: fixed;
      border-right: 1px solid rgba(0,0,0,.14);
      bottom: 0;
      background: #fff;
      color: #212121;
      display: block;
      font-family: Roboto,sans-serif;
      left: 0;
      z-index: 4;
      transform: translateZ(0);
      transform-style: preserve-3d;
      transition-delay: .1s;
      transition-duration: .2s;
      transition-property: transform,left;
      transition-timing-function: cubic-bezier(.4,0,.2,1);
}
      
      .pushmenu h3 {
        color: #f1f1f1;
        font-size: 1.3em;
        font-weight: 400;
        padding: 15px 25px;
        margin: 0;
        background: #333;
        height: 16px;
      }
      
      .links {
        list-style-type: none;
        padding: 0;
        margin-left: 0;
        text-align: left;
      }
      
      .links li { 
        font-size: 13px;
        padding: 12px 0 10px 0;
        transform: translateZ(0);
        width: 100%;
       }
      
      .links li a {
        border-left: 2px solid transparent;
        color: #212121;
        font-weight: 700;
        margin-top: 0;
        padding: 15px 0 15px 22px;
      }
      
      .links li a:after {
        content: '';
        display: block;
        position: absolute;
        left: 20px;
        bottom: -5px;
        width: 0;
        height: 4px;
        background-color: #f1f1f1;
        -webkit-transition: width 0.3s ease;
        -moz-transition: width 0.3s ease;
        transition: width 0.3s ease;
      }
      
      .links li a:hover:after { width: 70%; }
      
      .links li a:active { color: #dbdbdb; }
      
      .pushmenu-left { left: -220px; }
      
      .pushmenu-left.pushmenu-open { left: 0; }
      
      .pushmenu-push {
        overflow-x: hidden;
        position: relative;
        left: 0;
      }
      
      .pushmenu-push-toright { left: 220px; }
      .pushmenu, .pushmenu-push {
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        transition: all 0.5s ease;
      }
      .buttonset {
    }
    #nav_list {
        background: url(/images/icon_nav.png) no-repeat left top;
        cursor: pointer;
        height: 27px;
        width: 33px;
        text-indent: -99999em;
        margin-top: 0px;
    }
    body, html {margin:0}
    table{ width: 100% }
    table.dataTable.nowrap th, table.dataTable.nowrap td {
      white-space: pre-wrap !important;
  }

::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
	border-radius: 10px;
}

::-webkit-scrollbar
{
	width: 4px;
	background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
	background-color: #3366FF;
	border-radius: 10px;
	background-image: -webkit-linear-gradient(0deg,
	                                          rgba(255, 255, 255, 0.5) 25%,
											  transparent 25%,
											  transparent 50%,
											  rgba(255, 255, 255, 0.5) 50%,
											  rgba(255, 255, 255, 0.5) 75%,
											  transparent 75%,
											  transparent)
}
</style>