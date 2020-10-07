
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Map</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
               /*******************************
      * MODAL AS LEFT/RIGHT SIDEBAR
      * Add "left" or "right" in modal parent div, after class="modal".
      * Get free snippets on bootpen.com
      *******************************/
    .modal.left .modal-dialog,
    .modal.right .modal-dialog {
        position: fixed;
        margin: auto;
        width: 320px;
        height: 100%;
        -webkit-transform: translate3d(0%, 0, 0);
            -ms-transform: translate3d(0%, 0, 0);
             -o-transform: translate3d(0%, 0, 0);
                transform: translate3d(0%, 0, 0);
    }

    .modal.left .modal-content,
    .modal.right .modal-content {
        height: 100%;
        overflow-y: auto;
    }
    
    .modal.left .modal-body,
    .modal.right .modal-body {
        padding: 15px 15px 80px;
    }

/*Left*/
    .modal.left.fade .modal-dialog{
        left: -320px;
        -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
           -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
             -o-transition: opacity 0.3s linear, left 0.3s ease-out;
                transition: opacity 0.3s linear, left 0.3s ease-out;
    }
    
    .modal.left.fade.in .modal-dialog{
        left: 0;
    }
        
/*Right*/
    .modal.right.fade .modal-dialog {
        right: -320px;
        -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
           -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
             -o-transition: opacity 0.3s linear, right 0.3s ease-out;
                transition: opacity 0.3s linear, right 0.3s ease-out;
    }
    
    .modal.right.fade.in .modal-dialog {
        right: 0;
    }

/* ----- MODAL STYLE ----- */
    .modal-content {
        border-radius: 0;
        border: none;
    }

    .modal-header {
        border-bottom-color: #EEEEEE;
        background-color: #FAFAFA;
    }

/* ----- v CAN BE DELETED v ----- */


.demo {
    padding-top: 60px;
    padding-bottom: 110px;
}

.btn-demo {
    margin: 15px;
    padding: 10px 15px;
    border-radius: 0;
    font-size: 16px;
    background-color: #FFFFFF;
}

.btn-demo:focus {
    outline: 0;
}

.demo-footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    padding: 15px;
    background-color: #212121;
    text-align: center;
}

.demo-footer > a {
    text-decoration: none;
    font-weight: bold;
    font-size: 16px;
    color: #fff;
}

        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
       
        /* Optional: Makes the sample page fill the window. */
        html, body {
          height: 400px;
          margin: 0;
          padding: 0;
        }
       
        #mapLegend div img {
        float: left;
        margin-right: 5px;
        }
        #mapLegend h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div id= "app">

      <!-- Map Section -->
  <div class="container" style="margin-top: 40px">
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="mapcenter-tab" data-toggle="tab" href="#mapcenter" role="tab" aria-controls="mapcenter" aria-selected="true" style="color: black"><strong>Evacuation MAP</strong></a>
              <div id="mapLegend">
                <div id="mapLegends">
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"  style="color: black"><strong>Relief Map</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Soon</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="mapcenter" role="tabpanel" aria-labelledby="mapcenter-tab">
        
                
                <div id="map" style="height: 500px; width: 100%"></div>
                
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        
              <div id="reliefmap" style="height: 500px; width: 100%"></div>

            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...
                
            </div>
          </div>
      
      </div>
    </div>
  </div>
<!-- end section -->

     <!-- <button class="btn btn-danger block" id="fire" name="fire">Fire</button> --> 
  
    <div id="mapLegend">
      </div>
    </div>


    <!-- Fire Modal  Map -->

    <!-- Relief Modal -->
    <div class="modal fade left" id="firecenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-full-height modal-left" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            </div>
            <div class="modal-body">
                  <div id="firemap" style="height: 500px; width: 100%"></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <a href="#" class="btn btn-primary">More Info</a>
            </div>
          </div>
        </div>
      </div>
  
      <!-- End Modal -->
    <!-- End Modal -->



    <!-- Relief Modal -->
    <div class="modal fade left" id="modalright" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-full-height modal-left" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          </div>
          <div class="modal-body">
                <table id="classTable" class="table table-bordered">

                    <thead>
                    </thead>
                    <tbody>
                     
                          <tr>
                          <th style="text-align: left; color: black;"><strong>Address</strong></th>
                           <td id="add"></td>
                          </tr>
                           <tr>
                          <th style="text-align: left; color: black;"><strong>Needed</strong></th>
                           <td id="cate"></td>
                          </tr>
                          <th style="text-align: left; color: black;"><strong>Request</strong></th>
                           <td id="req"></td>
                          </tr>
                          </tr>
                            <th style="text-align: left; color: black;"><strong>Contact Person</strong></th>
                             <td id="con"></td>
                           </tr>
                          </tr>
                          <th style="text-align: left; color: black;"><strong>Phone Number</strong></th>
                           <td id="num"></td>
                          </tr>
                  
          
                    </tbody>
               </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="#" class="btn btn-primary">More Info</a>
          </div>
        </div>
      </div>
    </div>

    <!-- End Modal -->
    
 
    <div class="modal fade left" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-full-height modal-left" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            </div>
            <div class="modal-body">
                  <table id="classTable" class="table table-bordered">

                      <thead>
                      </thead>
                      <tbody>
                       
                            <tr>
                            <th style="text-align: center;"><strong>Address</strong></th>
                             <td id="address"></td>
                            </tr>
                             <tr>
                            <th style="text-align: center;"><strong>Capacity</strong></th>
                             <td id="capa"></td>
                            </tr>
                            <th style="text-align: center;"><strong>Information</strong></th>
                             <td id="info"></td>
                            </tr>
                    
            
                      </tbody>
                 </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <a href="#" class="btn btn-primary">Relief Status</a>
            </div>
          </div>
        </div>
      </div>

 
    
      <div class="modal fade right" id="center" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-full-height modal-right" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                 </button>
              <h3 class="title" id="exampleModalLabel">Your Guide </h3>
            </div>
           
            <div class="body">
                <table id="classTable" class="table table-bordered">

                      <thead>
                      </thead>
                      <tbody>
                        @foreach($results as $res)
                                  <tr>
                            <th>{{$res->brgyname}}</th>
                          <td id="from"><img src="{{$res->iconpic}}" style="width:40px;height:40px;"></td>
                                  </tr>
                    @endforeach
            
                      </tbody>
                 </table>
                 

                  
            </div>
           
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>



</body>

<script async defer type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTKEdDB4WG-1lMiD6qmBOqYZ9fB2gLKrE&callback=initMap">
</script>
<script>
  function initMap() {
  var mapOptions = {
    zoom: 12,
    minZoom: 6,
    maxZoom: 17,
    zoomControl:true,
    zoomControlOptions: {
        style:google.maps.ZoomControlStyle.DEFAULT
    },
    center: new google.maps.LatLng({{ $latitude }}, {{ $longitude }}),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    panControl:false,
    mapTypeControl:false,
    scaleControl:false,
    overviewMapControl:false,
    rotateControl:false
     }


      var map = new google.maps.Map(document.getElementById('map'), mapOptions);
      var warning = new google.maps.MarkerImage("images/warning.png", null, null, null, new google.maps.Size(40,52));
      var safe = new google.maps.MarkerImage("images/green.png", null, null, null, new google.maps.Size(40,52));
     var start = new google.maps.MarkerImage("images/start.png", null, null, null, new google.maps.Size(40,52));
      var full = new google.maps.MarkerImage("images/full.png", null, null, null, new google.maps.Size(40,52));
      var places = @json($ibon);



      for(place in places)
      {
          place = places[place];
          var safe = new google.maps.MarkerImage(place.iconpic, null, null, null, new google.maps.Size(40,52));
          var number = place.capacity;
          var percentoget = 75;
          var percentAsDecimal = (percentoget / 100);
          var percent = percentAsDecimal * number;

          if(place.latitude && place.longitude)
          {
              if(place.brgyid == 1 && place.numberofper >= place.capacity ) 
              {

                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon: full,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                      //infowindow.setContent(generateContent(place))
                      //infowindow.open(map, marker);
                      //$(".modal-body").html(place.centername + ' <br>' +  place.centeraddress + '<br>' + place.capacity );
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                       $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                       $("#fullHeightModalRight").modal('show');
                  }
                  })(marker, place));

              }
              else if(place.brgyid == 1 && place.numberofper >= percent)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon: warning,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                      //infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                       $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');
                  }
                  })(marker, place));

              }
               else if(place.brgyid == 1 && place.numberofper > 0 )
               {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:start,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place));
               }
               else if(place.brgyid == 1 && place.numberofper == 0 )
               {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:safe,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place));
               }
              else if(place.brgyid == 2 && place.numberofper >= place.capacity)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:full,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 2 && place.numberofper >= percent )
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:warning,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 2 && place.numberofper  > 0 )
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:start,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 2 && place.numberofper == 0 )
               {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:safe,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place));
               }
              //Barangay Number 3
                else if(place.brgyid == 3 && place.numberofper >= place.capacity)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:full,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 3 && place.numberofper >= percent )
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:warning,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 3 && place.numberofper  > 0 )
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:start,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 3 && place.numberofper == 0 )
               {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:safe,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place));
               }
              //Barangay Number 4
              else if(place.brgyid == 4 && place.numberofper >= place.capacity)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:full,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 4 && place.numberofper >= percent )
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:warning,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 4 && place.numberofper  > 0 )
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:start,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 4 && place.numberofper == 0 )
               {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:safe,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place));
               }
              //Barangay number 5
              else if(place.brgyid == 5 && place.numberofper >= place.capacity)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:full,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
               else if(place.brgyid == 5 && place.numberofper >= percent )
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:warning,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
               else if(place.brgyid == 5 && place.numberofper  > 0 )
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:start,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 5 && place.numberofper == 0)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:safe,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              //Barangay Number 6
               else if(place.brgyid == 6 && place.numberofper >= place.capacity)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:full,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
               else if(place.brgyid == 6 && place.numberofper >= percent )
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:warning,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
               else if(place.brgyid == 6 && place.numberofper  > 0)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:start,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 6 && place.numberofper == 0)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:safe,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              //Barangay Number 7
               else if(place.brgyid == 7 && place.numberofper >= place.capacity)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:full,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 7 && place.numberofper >= percent )
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:warning,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 7 && place.numberofper  > 0)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:start,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 7 && place.numberofper == 0)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:safe,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              //Barangay number 8 
              else if(place.brgyid == 8 && place.numberofper >= place.capacity)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:full,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 8 && place.numberofper >= percent )
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:warning,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 8 && place.numberofper  > 0 )
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:start,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 8 && place.numberofper == 0)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:safe,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              //Barangay number 9
              else if(place.brgyid == 9 && place.numberofper >= place.capacity)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:full,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 9 && place.numberofper >= percent )
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:warning,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 9 && place.numberofper  > 0 )
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:start,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
              else if(place.brgyid == 9 && place.numberofper == 0)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:safe,
                  map: map,
                  title: place.centername
                  });

                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                     // infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#capa').html(place.capacity);
                       $('#info').html(place.info);
                       $('#contact').html(place.persontocon);
                       $('#phone').html(place.phonenumber);
                       $('#count').html(place.numberofper);
                      $("#fullHeightModalRight").modal('show');

                  }
                  })(marker, place)); 
              }
      
          }
      }


         /* Adding Map Legends */
  
         var legend = document.getElementById('mapLegend');
  
         /* div= document.createElement('div');
          div.innerHTML = '<span><img src="images/pin.png">Putatan</span> <br><br> <span><img src="images/pin.png">Putatan</span>';
          legend.appendChild(div); */

          var div = document.createElement('div');
          div.innerHTML = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#center"> Legends</button>';
          legend.appendChild(div);

          /* Push Legend to Right Top */
     
          map.controls[google.maps.ControlPosition.RIGHT_TOP].push(legend);



      //Relief Map 

      var reliefoptions = {
      zoom: 12,
      minZoom: 6,
      maxZoom: 17,
      zoomControl:true,
      zoomControlOptions: {
        style:google.maps.ZoomControlStyle.DEFAULT
      },
      center: new google.maps.LatLng({{ $latitude }}, {{ $longitude }}),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      scrollwheel: false,
      panControl:false,
      mapTypeControl:false,
      scaleControl:false,
      overviewMapControl:false,
      rotateControl:false
      }

 
      
      var reliefmap = new google.maps.Map(document.getElementById('reliefmap'), reliefoptions);
          var pin = new google.maps.MarkerImage("images/pins.png", null, null, null, new google.maps.Size(40,52));
          var all = new google.maps.MarkerImage("images/all.png", null, null, null, new google.maps.Size(40,52));
          var medicine = new google.maps.MarkerImage("images/medicine.png", null, null, null, new google.maps.Size(40,52));
          var yellowneeds = new google.maps.MarkerImage("images/yellowneeds.png", null, null, null, new google.maps.Size(40,52));
          var clothes = new google.maps.MarkerImage("images/clothes.png", null, null, null, new google.maps.Size(40,52));
          var places = @json($relimap);

      for(place in places)
      {
          place = places[place];
        
       
          if(place.latitude && place.longitude)
          {
              if(place.reliefid == 5 ) 
              {

                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon: pin,
                  map: reliefmap,
                  title: place.centername
                  });

                  marker.setMap(reliefmap);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                       $(".modal-title").text(place.centername);
                       $('#add').html(place.centeraddress);
                       $('#cate').html(place.reliefcategory);
                       $('#req').html(place.reliefrequest);
                       $('#con').html(place.persontocon);
                       $('#num').html(place.phonenumber);
                       $("#modalright").modal('show');
                  }
                  })(marker, place));

              }
              else if(place.reliefid == 4)
              {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon: all,
                  map: reliefmap,
                  title: place.centername
                  });

                  marker.setMap(reliefmap);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                      //infowindow.setContent(generateContent(place))
                     // infowindow.open(map, marker);
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#add').html(place.centeraddress);
                       $('#cate').html(place.reliefcategory);
                       $('#req').html(place.reliefrequest);
                       $('#con').html(place.persontocon);
                       $('#num').html(place.phonenumber);
                       $("#modalright").modal('show');
                  }
                  })(marker, place));

              }
               else if(place.reliefid == 3 )
               {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon:medicine,
                  map: reliefmap,
                  title: place.centername
                  });

                  marker.setMap(reliefmap);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#add').html(place.centeraddress);
                       $('#cate').html(place.reliefcategory);
                       $('#req').html(place.reliefrequest);
                       $('#con').html(place.persontocon);
                       $('#num').html(place.phonenumber);
                       $("#modalright").modal('show');

                  }
                  })(marker, place));
               }
               else if(place.reliefid == 2 )
               {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon: clothes,
                  map: reliefmap,
                  title: place.centername
                  });

                  marker.setMap(reliefmap);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#add').html(place.centeraddress);
                       $('#cate').html(place.reliefcategory);
                       $('#req').html(place.reliefrequest);
                       $('#con').html(place.persontocon);
                       $('#num').html(place.phonenumber);
                       $("#modalright").modal('show');

                  }
                  })(marker, place));
               }
               else if(place.reliefid == 1 )
               {
                  var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(place.latitude, place.longitude),
                  icon: yellowneeds,
                  map: reliefmap,
                  title: place.centername
                  });

                  marker.setMap(reliefmap);
                  var infowindow = new google.maps.InfoWindow();
                  google.maps.event.addListener(marker, 'click', (function (marker, place) {
                  return function () {
                      map.panTo(this.getPosition());
                      map.setZoom(15);
                      $(".modal-title").text(place.centername);
                      $('#address').html(place.centeraddress);
                       $('#cate').html(place.reliefcategory);
                       $('#req').html(place.reliefrequest);
                       $('#con').html(place.persontocon);
                       $('#num').html(place.phonenumber);
                       $("#modalright").modal('show');

                  }
                  })(marker, place));
               }
             
          }
      }

      /* Adding Map Legends  */
      var legends = document.getElementById('mapLegends'); 
  
  
        var div = document.createElement('div');
        div.innerHTML = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reliefcenter"> Guide</button> <br> <br>  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#firecenter"> Fire Center</button>  ';
        legends.appendChild(div);

  

    /* Push Legend to Right Top   */ 
    reliefmap.controls[google.maps.ControlPosition.RIGHT_TOP].push(legends); 
  


}
  google.maps.event.addDomListener(window, 'load', initMap);

</script>




</html>
