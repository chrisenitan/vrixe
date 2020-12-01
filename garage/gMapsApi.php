
 <script>
   
   var address;
   
   if(document.getElementById("gMapApiFullDestination") || document.getElementById("gMapApiFullVenue")) {
     
if(document.getElementById("gMapApiFullVenue").innerHTML > "" && document.getElementById("gMapApiFullDestination").innerHTML > ""){
  //use direction matrix  
   function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('mapbox'), {
          zoom: 7,
          //center: {lat: 6.433322, lng: 3.420520} //not needed IF we dont want precenter before route loads
    styles:[{"elementType":"geometry","stylers":[{"color":"#242f3e"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#746855"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#242f3e"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#d59563"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#d59563"}]},{"featureType":"poi.medical","elementType":"geometry.fill","stylers":[{"color":"#ff6c5f"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#263c3f"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#6b9a76"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#38414e"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#212a37"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#9ca5b3"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#746855"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#1f2835"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#f3d19c"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#2f3948"}]},{"featureType":"transit.station","elementType":"labels.text.fill","stylers":[{"color":"#d59563"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#17263c"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#7acbff"},{"visibility":"on"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#515c6d"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#17263c"}]}]
        });
        directionsDisplay.setMap(map);
      calculateAndDisplayRoute(directionsService, directionsDisplay);
     

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById("gMapApiFullVenue").innerHTML, //always available
          destination: document.getElementById("gMapApiFullDestination").innerHTML, //destination
          travelMode: 'WALKING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            console.log('Directions request failed due to ' + status);
          }
        });
      }
  
}
}
   else{
     //use ordinary map
     address = document.getElementById("gMapApiFullVenue").innerHTML;
       function initMap() {
        var map = new google.maps.Map(document.getElementById('mapbox'), {
          zoom: 12 //higher the closer 
        });
        var geocoder = new google.maps.Geocoder();
        geocodeAddress(geocoder, map);
      }

      function geocodeAddress(geocoder, resultsMap) {
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            console.log('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
     
     
   }
   }
  </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr1pOvW2cHlHyjtLhR1Hoqr7QnvH2DZIg&callback=initMap">

  </script>