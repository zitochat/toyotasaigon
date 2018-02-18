<div id="distribution">

    <section id="main-content">
        <div id="agency">
            <iframe
  width="100%"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBD3NkHzWYnBxBtluShsuUMaXyOt22H-AE&q=Toyota Đông Sài Gòn - CN Gò Vấp&zoom=20" allowfullscreen>
</iframe>
            <div class="agency-list">
                <h2 class="title">Hệ thống chi nhánh
                </h2>

            <ul class="list-unstyled list " id="agency-list">

                
            <li class="item  item-1 active">
                       <div class="wrapper">
                <div onclick="showAddress('6'); return false;" style="cursor:pointer">
                    <strong class="title">CHI NHÁNH GÒ VẤP</strong>

                    <p class="kind-agency" id="agent-6">18 Phan Văn Trị, P7, Quận Gò Vấp, TP.HCM</p>
                    <p class="kind-agency" style="display:none" id="toado-6">10.829018,106.683618</p>
                    <p class="kind-agency"><span>Hotline 1:</span> 012 1900 6066  </p>
                    <p class="kind-agency"><span>Hotline 2:</span> 0976 848 707  </p> 
                    <p class="kind-agency"><span>Email:</span> tesc@toyotasaigon.xyz </p>
                </div>
              </div>
    </li>
                
                  



</ul>
            </div>


        </div>
    </section>





</div>






<script>
    

      

    // var locations = [['Km10, Đường Giải Phóng, Xã Tứ Hiệp, Huyện Thanh Trì, Hà Nội ', 'KIA Giải Phóng', 'Hà Nội', '20.959338, 105.844228'],['Số 2A, Ngô Gia Tự, P. Đức Giang. Q. Long Biên, TP.Hà Nội ', 'KIA Long Biên', 'Hà Nội', '21.056332, 105.889148'],['Km 10.5, QL 32, Cầu Diễn, Từ Liêm, TP Hà Nội, Việt Nam  ', 'KIA Cầu Diễn', 'Hà Nội', '21.047486, 105.744938'],['309A Kinh Dương Vương, An Lạc, Bình Tân, TP.HCM ', 'KIA Bình Tân', 'TP Hồ Chí Minh', '10.7430346,106.6185356'],['Đường Hùng Vương, Khu Phố Thanh Bình A, Thị Trấn Gò Dầu, Huyện Gò Dầu, Tỉnh Tây Ninh ', 'KIA Tây Ninh', 'Tây Ninh', '11.083090, 106.266177 '],['56/9 ĐLBD, tổ 15, KP.Bình Giao, P.Thuận Giao, Tx.Thuận An, T.Bình Dương ', 'KIA Bình Dương', 'Tây Ninh', '10.937407, 106.709748'],['Số 19, Đường 2A, P.An Bình, TP. Biên Hòa, Tỉnh Đồng Nai ', 'Kia Biên Hòa', 'Đồng Nai', '10.929292, 106.868867'],['Quốc lộ 51, Phường Phước Trung, Thành phố Bà Rịa, Tỉnh Bà Rịa - Vũng Tàu ', 'KIA Vũng Tàu', 'Bà Rịa-Vũng Tàu', '10.488642, 107.172130'],['QL 1A, Thôn Thắng Lợi, Xã Hàm Thắng, Huyện Hàm Thuận Bắc, Bình Thuận ', 'KIA Phan Thiết', 'Bình Thuận', '10.956712, 108.118200'],['Số 2 Bis Đường Ba Tháng Tư - Phường 3 - Đà Lạt - Lâm Đồng ', 'KIA Đà Lạt', 'Lâm Đồng', '11.935298, 108.445113'],['Lô số 1, Khu Vực 2, Đường 23/10, Xã Vĩnh Hiệp, Tp. Nha Trang, Khánh Hòa ', 'KiA Nha Trang', 'Khánh Hoà', '11.6596307,106.8980234'],['Khu Phố 2, Phường 10, TP Mỹ Tho, Tỉnh Tiền Giang ', 'Kia Tiền Giang', 'Tiền Giang', '10.389347,106.338783'],['QL 1A, Tân Vĩnh Thuận, Tân Ngãi, TP. Vĩnh Long, tỉnh Vĩnh Long ', 'KIA Vĩnh Long', 'Vĩnh Long', '10.267605, 105.927173'],['145 Nguyễn Tất Thành, P Thủy Dương, Thị Xã Hương Thủy, Tỉnh Thừa Thiên Huế ', 'KIA Huế', 'Thừa Thiên-Huế', '16.443337, 107.617348'],['93-95-97 Trường Chinh, Phường Phù Đổng, Thành phố Pleiku, Tỉnh Gia Lai ', 'KIA Gia Lai (ĐL NGỌC HOA)', 'Gia Lai', '13.966405,108.017218'],['03 Trần Nhật Duật - Phường Tân Lợi - TP Buôn Ma Thuột - Tỉnh Đăk Lăk ', 'KIA Đắk Lắk (ĐL DUY ANH)', 'Đắk Lắk', '12.689192, 108.056506'],['07 Đường Đinh Tiên Hoàng, Phường Nghĩa Chánh, Thành phố Quảng Ngãi, Tỉnh Quảng ngãi, Việt Nam ', 'KIA Quảng Ngãi (ĐL HỒNG SƠN)', 'Quảng Ngãi', '15.117939, 108.815823'],['270 Phan Đình Phùng, phường Duy Tân, TP. Kon Tum ', 'KIA Kontum  (ĐL NGỌC THY)', 'Kon Tum', '14.3754222,107.9859468'],['25/10 Trần Hưng Đạo, P. Mỹ Thới, TP. Long Xuyên, An Giang ', 'KIA An Giang (ĐL TÂN THÁI DƯƠNG)', '', '10.45305, 105.65468'],['315 - Nguyễn Khoái, Hai Bà Trưng, Hà Nội ', 'KIA Bạch Đằng', 'Hà Nội', '21.005382, 105.869636'],['Đường Lê Thái Tổ, Phường Võ Cường, TP.Bắc Ninh, tỉnh Bắc Ninh. ', 'KIA Bắc Ninh', 'Bắc Ninh', 'sdgsd'],['Khu ĐTTM An Phú, Đường Tây Sơn, P. Quang Trung, TP Quy Nhơn, Bình Định ', 'KIA Bình Định', 'Bình Định', '13.756535, 109.207637'],['Quốc lộ IA, phường Tân Thạnh, Tam kỳ, Quảng Nam ', 'KIA Quảng Nam', 'Quảng Nam', '15.586755,108.465079'],['648 Phú Riềng Đỏ, Phường Tân Xuân, Tx. Đồng Xoài, T. Bình Phước ', 'KIA Bình Phước', 'Bình Phước', '11.6596307,106.8980234'],['Lô số 01- đường Vành Đai 2 - phường 9 - Tp.Cà Mau - Tỉnh Cà Mau ', 'KIA Cà Mau', 'Cà Mau', '9.171751, 105.192247'],];

var provinces = [['CÔNG TY CP TOYOTA ĐÔNG SÀI GÒN','10.811301, 106.756080'],['CHI NHÁNH GÒ VẤP','10.829018, 106.683618'],['CHI NHÁNH NGUYỄN VĂN LƯỢNG','10.838397, 106.666852'],['CHI NHÁNH QUẬN 9','10.852094, 106.778754'],['TOYOTA BÌNH THUẬN','10.957766, 108.117306'],];
        // var provinces = [['Bà Rịa-Vũng Tàu,Việt Nam','10.5417397,107.2429976'],['Bắc Ninh,Việt Nam','21.121444,106.1110501'],['Bình Định,Việt Nam','13.7829673,109.2196634'],['Bình Phước,Việt Nam','11.7511894,106.7234639'],['Bình Thuận,Việt Nam','10.9804603,108.2614775'],['Cà Mau,Việt Nam','8.9624099,105.1258955'],['Cần Thơ,Việt Nam','10.0451618,105.7468535'],['Đà Nẵng,Việt Nam','16.0544068,108.2021667'],['Đắk Lắk,Việt Nam','12.7100116,108.2377519'],['Đồng Nai,Việt Nam','11.0686305,107.1675976'],['Gia Lai,Việt Nam','13.8078943,108.109375'],['Hà Nội,Việt Nam','21.0031177,105.8201408'],['Hải Phòng,Việt Nam','20.8449115,106.6880841'],['Khánh Hoà,Việt Nam','12.2585098,109.0526076'],['Kon Tum,Việt Nam','14.661167,107.83885'],['Lâm Đồng,Việt Nam','11.9404192,108.4583132'],['Nam Định,Việt Nam','20.2791804,106.2051484'],['Nghệ An,Việt Nam','19.2342489,104.9200365'],['Quảng Bình,Việt Nam','17.4659391,106.5983958'],['Quảng Nam,Việt Nam','15.5393538,108.019102'],['Quảng Ngãi,Việt Nam','15.0759838,108.7125791'],['Quảng Ninh,Việt Nam','21.006382,107.2925144'],['Quảng Trị,Việt Nam','16.7943472,106.963409'],['Tây Ninh,Việt Nam','11.3675415,106.1192802'],['Thái Nguyên,Việt Nam','21.5613771,105.876004'],['Thanh Hoá,Việt Nam','20.1291279,105.3131185'],['Thừa Thiên-Huế,Việt Nam','16.467397,107.5905326'],['Tiền Giang,Việt Nam','10.4493324,106.3420504'],['TP Hồ Chí Minh,Việt Nam','10.746903,106.676292'],['Vĩnh Long,Việt Nam','10.0861281,106.0169971'],['Vĩnh Phúc,Việt Nam','21.3608805,105.5474373'],];
   
    function getTitles(locationdata) {
        var lst = '';
        //alert(locationdata);
        localtiondata = locationdata.replace("Việt Nam", " ");
        for (var i = 0; i < locations.length; i++) {
            if (locationdata.indexOf(locations[i][2]) > -1 && locations[i][2].length > 5) {

                lst = getTitle(locations[i][1], locations[i][0]) + '<br/>' + lst;

            }





        }
        return lst;
    }
    function getTitle(title, address) {

        var contentString = '<div class="info" style="padding: 20px;"><div class="info_content">';
        contentString += '<h4 style="font-size: 18px; font-weight: bold; color: #bb162b;"> ' + title + ' </h4>';
        contentString += '<p style="font-size: 16px; margin: 0"><img src="/Content/images/kia_icon_mapmaker.jpg"/> <strong>Địa chỉ: </strong>' + address + '</p>';
        contentString += '</div></div>';
        return contentString;
    }
  
    function loadListAgency() {
        xhr = $.get("/Agency/GetAgencyList?provinceName=" + $("#agency-region option:selected").text() + "&districtID=" + $("#district-filter").val() + "&typeID=" + $("#agent-filter").val(), function (html) {
            $("#agency-list").html(html);
        }, 'html');
    }
    </script>

    <script>
    

        jQuery(function($) {
            // Asynchronously Load the map API 
            //var script = document.createElement('script');
            //script.src = "//maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
            //document.body.appendChild(script);
        });
        $(document).ready(function() {
    
            getAll();
        });
    
       
      //  function initialize() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
    
                scrollwheel: false,
                panControl: true,
                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.LARGE
                },
                scaleControl: true,
    
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
     
            var bounds = new google.maps.LatLngBounds();
            var marker, i;
           
            var markers = [];
            var geocoder = new google.maps.Geocoder();
    
            // Display multiple markers on a map
            var infoWindow = new google.maps.InfoWindow(), marker, i;
    
            function getAll() {
    
    
                // Loop through our array of markers & place each one on the map  
                for (i = 0; i < provinces.length; i++) {
                    var data = provinces[i][1];
                    var res = data.split(",");
                    var position = new google.maps.LatLng(res[0],res[1]);
               
                    bounds.extend(position);
                    marker = new google.maps.Marker({
                        position: position,
                        map: map,
                        icon: base_url+'/Content/images/kia_icon_mapmaker.jpg',
                        title: provinces[i][0]
                    });
    
                    // Allow each marker to have an info window    
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infoWindow.setContent(getTitles(provinces[i][0]));
                            infoWindow.open(map, marker);
                        }
                    })(marker, i));
                    markers.push(marker);
                    // Automatically center the map fitting all markers on the screen
                    map.fitBounds(bounds);
                }
    
                // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
                var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                    //this.setZoom(14);
                    google.maps.event.removeListener(boundsListener);
                });
    
    
            }
         
    
    
    
    
    
     //   }
    
    
        function codeAddress(local) {
            geocoder.geocode({
                'address': local[0]
            }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                  
                    var res = local[3].split(",");
                 
                    var myLatlng = new google.maps.LatLng(res[0].trim(),res[1].trim());
                    map.setCenter(results[0].geometry.location);
                    var marker = new google.maps.Marker({
                        map: map,
                        title: local[0],
                            
                        position: myLatlng,
    
                        url: local[2],
                        // position: results[0].geometry.location,
                        icon: base_url+'/Content/images/kia_icon_mapmaker.jpg'
                    });
                    markers.push(marker);
                    bounds.extend(marker.getPosition());
                    map.fitBounds(bounds);
    
                    google.maps.event.addListener(marker, 'dblclick', function () {
                        window.location.href = this.url;
                    });
    
                    google.maps.event.addListener(marker, 'click', (function (marker, location) {
                        return function () {
                            infoWindow.setContent(getTitle(local[1], local[0]));
                            infoWindow.open(map, marker);
                        };
                    })(marker, local));
    
    
    
                } else if (status === google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
                    setTimeout(function () {
                        codeAddress(local);
                    }, 20);
                } else if (status === google.maps.GeocoderStatus.ZERO_RESULTS) {
    
    
                }
    
                else {
                    alert("Geocode was not successful for the following reason:"
                        + status);
                }
            });
        }
        function codeProvince(location) {
               
            var plot = new google.maps.LatLng(location[1]);
       
            //map.setCenter(plot);
            bounds.extend(plot);
            var marker = new google.maps.Marker({
                map: map,
                title: location[0],
                url: location[0],
                position: plot,
                icon: base_url+'/Content/images/kia_icon_mapmaker.jpg'
            });
            markers.push(marker);
               
            map.fitBounds(bounds);
    
    
    
    
        }
        function showAddress(id) {
            resetMap();
             var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
    
                scrollwheel: false,
                panControl: true,
                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.LARGE
                },
                scaleControl: true,
    
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
                  
            var input = $('#toado-' + id).html();
           var address = $("#agent-"+id).html();
            var latlngStr = input.split(',', 2);
              var position = new google.maps.LatLng(latlngStr[0],latlngStr[1]);
               
          
            geocoder.geocode({
                'location': position
            }, function (results, status) {
              
              
                if (status == google.maps.GeocoderStatus.OK) {
                  
                    map.setCenter(results[0].geometry.location);
                    var marker = new google.maps.Marker({
                        map: map,
                       
                        //title: address,
                        //url: address,
                        position: results[0].geometry.location,
                        icon: base_url+'/Content/images/kia_icon_mapmaker.jpg'
                    });
                    
                    markers.push(marker);
                    bounds.extend(marker.getPosition());
                    map.fitBounds(bounds);
               
                    google.maps.event.addListener(marker, 'dblclick', function () {
                        window.location.href = this.url;
                    });
    
                    google.maps.event.addListener(marker, 'click', (function (marker, location) {
                        return function () {
                            infoWindow.setContent(getTitle("", address));
                            infoWindow.open(map, marker);
                        };
                    })(marker, address));
                    map.setCenter(results[0].geometry.location);
                    map.setZoom(18);
                    
    
                } else if (status === google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
    
                    setTimeout(function () {
    
                    }, 20);
                } else if (status === google.maps.GeocoderStatus.ZERO_RESULTS) {
    
    
                }
    
                else {
                    alert("Geocode was not successful for the following reason:"
                        + status);
                }
            });
        }
        function resetMap() {
            for (var i = 0; i < markers.length; i++) {
    
    
                markers[i].setMap(null);
            }
    
            markers = [];
    
        }
        $("#agency-region").on('change', function () {
    
            setTimeout(
                      function () {
                          loadListAgency();
                      }, 100);
    
            resetMap();
            if ($("#agency-region").val() == "-1") {
    
                getAll();
            } else {
                var valcity = $("#agency-region option:selected").text();
                var locationbycity = jQuery.grep(locations, function (a) {
                    return $.trim(a[2]) == valcity;
                });
    
          
                for (i = 0; i < locationbycity.length; i++) {
    
    
                    codeAddress(locationbycity[i]);
    
                }
    
                geocoder.geocode({ 'address': valcity }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                            
                        map.setCenter(results[0].geometry.location);
                        map.setZoom(11);
    
                    }
                });
    
            }
    
    
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
          $('#agency .agency-list .list .item').click(function(){
            $('#agency .agency-list .list .item').removeClass('active');
            $(this).addClass('active');
          })
           $('#agency .agency-list .list .item-0').trigger("click");
           $('#agency .agency-list .list .item-0 .wrapper > div').trigger("click");
          
        });
        </script>