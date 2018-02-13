<html>
    <head>
            <script src="//code.jquery.com/jquery.min.js"></script>
            <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
            <script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
        <script>
                function slug(title)
                {
                    var slug = title.toLowerCase();
                 
                    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                    slug = slug.replace(/đ/gi, 'd');
                    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                    slug = slug.replace(/ /gi, "-");
                    slug = slug.replace(/\-\-\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-/gi, '-');
                    slug = '@' + slug + '@';
                    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                    return slug;
                }

                var editor_config = {
                    height: 400,
                    path_absolute : "/",
                    selector: "textarea#content",
                    plugins: [
                        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                        "searchreplace wordcount visualblocks visualchars code fullscreen",
                        "insertdatetime media nonbreaking save table contextmenu directionality",
                        "emoticons template paste textcolor colorpicker textpattern"
                    ],
                    rel_list: [
                        {title: 'dofollow', value: 'dofollow'},
                        {title: 'nofollow', value: 'nofollow'}
                    ],
                    allow_unsafe_link_target: true,
                    toolbar: "insertfile undo redo | styleselect fontselect fontsizeselect | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | emoticons preview",
                    relative_urls: false,
                    image_caption: true,
                    file_browser_callback : function(field_name, url, type, win) {
                        localStorage.setItem('target_input', field_name);
                        let xtype=type=='image'? 'Images': 'Files';
                        let options= false;
                        let route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
                        window.open(route_prefix + '?type=' + xtype, 'FileManager', 'width=900,height=600');
                    },
                    content_css: [
                        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                    ]
                };
                
                tinymce.init(editor_config);
                
        </script>
            @include('backend.includes.css')
    </head>
    <body class="pushmenu-push">

            @include('backend.includes.nav')

                  <div class="containers">
                        <div class="main">
                        <table id="hor_menu" style=" height: 50px; box-shadow: 0 2px 5px rgba(0,0,0,.26); background-color: #007bff; "><tbody><tr><td style=" width: 5%; "><section class="buttonset"> <div id="nav_list">MENU</div> </section></td><td><b style="color:white">Toyota Sài Gòn Cpanel</b></td></tr></tbody></table>
                          @yield('content')
                            <!-- End Content -->
                          </div><!-- End Main -->
                    </div>
                    <script>
                            $(document).ready(function(){
                                $('#show_data').DataTable();
                                $('#lfm').filemanager('image');
                            });
                            </script>
    </body>
</html>