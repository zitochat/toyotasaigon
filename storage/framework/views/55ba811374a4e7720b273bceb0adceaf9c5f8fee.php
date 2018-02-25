<div id="distribution">

    <section id="main-content">
        <div id="agency">
            <div id="map"></div>
            <div class="agency-list">
              
            <ul class="list-unstyled list " id="agency-list">

                
            <li class="item  item-1 active">
                       <div class="wrapper">
                <div onclick="showAddress('6'); return false;" style="cursor:pointer">
                    <strong class="title">CHI NHÁNH GÒ VẤP</strong>

                    <p class="kind-agency" id="agent-6">18 Phan Văn Trị, P7, Quận Gò Vấp, TP.HCM</p>
                    <p class="kind-agency" style="display:none" id="toado-6">10.829018,106.683618</p>
                    <p class="kind-agency"><span>Hotline 1:</span> 012 1900 6066  </p>
                    <p class="kind-agency"><span>Hotline 2:</span> 0976 848 707  </p> 
                    <p class="kind-agency"><span>Email:</span> banhang@toyotasaigon.xyz </p>
                </div>
              </div>
    </li>

</ul>
            </div>
        </div>
    </section>

</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCT1PIXMnfdyI9-fGg4qR6jH4DFixOBVFw&libraries=places&callback=initAutocomplete" async defer></script>

<script>
function initAutocomplete() {
  var myLatLng = {lat: 10.8289227, lng: 106.6839508};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'ToYoTa Đông Sài Gòn - CN Gò Vấp',
label:'ToYoTa Đông Sài Gòn',
    animation: google.maps.Animation.DROP,
  });
}

</script>