<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css"/>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
    .pushmenu {
        background: #444;
        text-align: center;
        font-family: Tahoma, Geneva, sans-serif;
        width: 220px;
        height: 100%;
        top: 0;
        z-index: 1000;
        position: fixed;
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
      
      .links li {  }
      
      .links li a {
        position: relative;
        display: block;
        color: #f1f1f1;
        font-weight: 400;
        text-decoration: none;
        padding: 8px;
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
        background: #00A287;
        height: 16px;
        padding: 10px 20px 20px;
    }
    #nav_list {
        background: url(/images/icon_nav.png) no-repeat left top;
        cursor: pointer;
        height: 27px;
        width: 33px;
        text-indent: -99999em;
        margin-top: -9px;
    }
    body, html {margin:0}
    table{ width: 100% }
    table.dataTable.nowrap th, table.dataTable.nowrap td {
      white-space: pre-wrap !important;
  }
</style>