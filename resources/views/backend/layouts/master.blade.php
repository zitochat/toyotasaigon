<html>
    <head>
            <script src="//code.jquery.com/jquery.min.js"></script>
        @include('backend.includes.css')
    </head>
    <body class="pushmenu-push">

            @include('backend.includes.nav')

                  <div class="containers">
                        <div class="main">
                        <table id="hor_menu" style=" height: 50px; box-shadow: 0 2px 5px rgba(0,0,0,.26); background-color: #007bff; "><tbody><tr><td style=" width: 5%; "><section class="buttonset"> <div id="nav_list">MENU</div> </section></td><td>Menu</td></tr></tbody></table>
                          @yield('content')
                            <!-- End Content -->
                          </div><!-- End Main -->
                    </div>
                    <script>
                            $(document).ready(function(){
                                $('#show_data').DataTable();
                            });
                            </script>
    </body>
</html>