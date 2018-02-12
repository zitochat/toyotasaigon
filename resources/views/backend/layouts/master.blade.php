<html>
    <head>
            <script src="//code.jquery.com/jquery.min.js"></script>
        @include('backend.includes.css')
    </head>
    <body class="pushmenu-push">

            @include('backend.includes.nav')

                  <div class="containers">
                        <div class="main">
                            <section class="buttonset">
                                <div id="nav_list">MENU</div>
                            </section>
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