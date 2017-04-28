<?php //echo "DASH MAP"; ?>
<script  src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular.min.js"></script>
<script  src="http://maps.googleapis.com/maps/api/js?language=en&key=<?php echo MAPS_API_KEY; ?>"></script>
<script type="text/javascript">
//Data
var locations = [<?php echo $locations_json; ?>];

//Angular App Module and Controller
var expoApp = angular.module('mapsApp', []);
expoApp.controller('MapCtrl', function ($scope) {
var bounds = new google.maps.LatLngBounds();
var infowindow = new google.maps.InfoWindow();  

    var mapOptions = {
        zoom: 3,
        center: new google.maps.LatLng(25,50),
        mapTypeId: google.maps.MapTypeId.TERRAIN
    }

    $scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);

    $scope.markers = [];
    
    var infoWindow = new google.maps.InfoWindow();
    
    var createMarker = function (info){
        
        var marker = new google.maps.Marker({
            map: $scope.map,
            position: new google.maps.LatLng(info.lat, info.long),
            title: info.city
        });


        marker.content = 
        '<div class="infoWindowContent">' 
        + info.desc  
        +'</br>'
        + info.date 
        +'</div>';
        
        google.maps.event.addListener(marker, 'click', function(){
            infoWindow.setContent('<h2>' + marker.title + '</h2>' + marker.content);
            infoWindow.open($scope.map, marker);

            /*Code for button and data movement*/
        	$('#booking_button').removeAttr("disabled");

            $('.event_name').html(marker.title);
            $('.event_info').html(marker.content);
        	// alert(info.location_id);
        	$('#selected_id').val(info.location_id);
        });
        
        $scope.markers.push(marker);
    }  
    
    // console.log(locations);

    for (i = 0; i < locations.length; i++){
        createMarker(locations[i]);
    }

    $scope.openInfoWindow = function(e, selectedMarker){
        e.preventDefault();
        google.maps.event.trigger(selectedMarker, 'click');
    }

});

</script>
<div class="col-md-12" ng-app="mapsApp">
	<div ng-controller="MapCtrl">
	    <div id="map" class="margin-vert"></div>
	    
	    <div class="col-md-12">
	    	<?php echo form_open('Dashboard/book_location'); ?>
	    	<!-- <a id="booking_button" class="btn btn-info btn-fill margin-vert" href="#" disabled>BOOK</a> -->
            <div class="col-md-8">
                <p><strong>Event Name: </strong></p><p class="event_name">Select location to view data and enable booking</p>
                <p><strong>Event Details: </strong></p><p class="event_info">Select location to view data and enable booking</p>
            </div>
            <div class="col-md-4">
                <input type="hidden" id='selected_id' name="selected_id" />
    	    	<button id="booking_button" type="submit" class="btn btn-info btn-fill margin-vert col-md-12" disabled>BOOK YOUR PLACE</button>
            </div>
	    	<?php echo form_close(); ?>
	    </div>
	</div>

</div>