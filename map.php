<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 500px;
        width: 900px;
        border: 5px solid blue;
        padding: 5px;
        margin: 5px;
        display: block;
        margin-right: auto;
        margin-left: auto;
       }
    </style>
    <title>Map View</title>
  </head>
  <body>
    <h2 align="center">Monitoring via Map</h2>
    <div id="map"></div>
    <script>
      function initMap() {
        var salem = {lat: 11.6643, lng: 78.1460};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: salem
        });
        var marker = new google.maps.Marker({
          position: salem,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArVVZam8CNZ6eIWo-z63g--2a1SiXh-4c&callback=initMap">
    </script>
  </body>
</html>
      