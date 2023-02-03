<?php
    $json = file_get_contents('https://geolocation-db.com/json');
    $data = json_decode($json);
    $longitude = $data->longitude;
    $latitude = $data->latitude;
    $ip = $data->IPv4;
?>

<!-- <!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Map directions</title>
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
<script src='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.js'></script>
<link href='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.css' rel='stylesheet' />
<style>
  body { margin:0; padding:0; }
  #map { position:absolute; top:0; bottom:0; width:100%; }
</style>
</head>
<body>
<style>
#inputs,
#errors,
#directions {
    position: absolute;
    width: 33.3333%;
    max-width: 300px;
    min-width: 200px;
}

#inputs {
    z-index: 10;
    top: 10px;
    left: 10px;
}

#directions {
    z-index: 99;
    background: rgba(0,0,0,.8);
    top: 0;
    right: 0;
    bottom: 0;
    overflow: auto;
}

#errors {
    z-index: 8;
    opacity: 0;
    padding: 10px;
    border-radius: 0 0 3px 3px;
    background: rgba(0,0,0,.25);
    top: 90px;
    left: 10px;
}

</style>

<script src='https://api.mapbox.com/mapbox.js/plugins/mapbox-directions.js/v0.4.0/mapbox.directions.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox.js/plugins/mapbox-directions.js/v0.4.0/mapbox.directions.css' type='text/css' />

<div id='map'></div>
<div id='inputs'></div>
<div id='errors'></div>
<div id='directions'>
  <div id='routes'></div>
  <div id='instructions'></div>
</div>
<script>
L.mapbox.accessToken = 'pk.eyJ1Ijoic2hpdnU3ODg5IiwiYSI6ImNsZGhkbGdhbzA4Z28zd21lMHR1ZXNpbmEifQ.3PxQZmLwdla0ZFL66b8-nw';
var map = L.mapbox.map('map', null, {
    zoomControl: false
})
//   .setView([40, -74.50], 9)
//   .setView([22.719569 , 75.857726], 9)
  .setView([<?php //echo $latitude; ?>, <?php //echo $longitude; ?>], 9)
  .addLayer(L.mapbox.styleLayer('mapbox://styles/mapbox/streets-v11'));

// move the attribution control out of the way
map.attributionControl.setPosition('bottomleft');

// create the initial directions object, from which the layer
// and inputs will pull data.
var directions = L.mapbox.directions();

var directionsLayer = L.mapbox.directions.layer(directions)
    .addTo(map);

var directionsInputControl = L.mapbox.directions.inputControl('inputs', directions)
    .addTo(map);

var directionsErrorsControl = L.mapbox.directions.errorsControl('errors', directions)
    .addTo(map);

var directionsRoutesControl = L.mapbox.directions.routesControl('routes', directions)
    .addTo(map);

var directionsInstructionsControl = L.mapbox.directions.instructionsControl('instructions', directions)
    .addTo(map);


// // Build a marker from a simple GeoJSON object:
// var marker = L.mapbox.featureLayer({
//     type: 'Feature',
//     geometry: {
//         type: 'Point',
//         coordinates: [-73.9840, 40.7271]
//     },
//     properties: {
//         title: 'Hello world!',
//         'marker-color': '#f86767'
//     }
// }).addTo(map);

// // Iterate over the featureLayer we've called "marker"
// // and open its popup instead of clicking to trigger it.
// marker.eachLayer(function(m) {
//   m.openPopup();
// });
</script>
</body>
</html> -->






<?php
    $json = file_get_contents('https://geolocation-db.com/json');
    $data = json_decode($json);
    $longitude = $data->longitude;
    $latitude = $data->latitude;
    $ip = $data->IPv4;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Display navigation directions</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.js"></script>
<style>
body { margin: 0; padding: 0; }
#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
</head>
<body>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.1/mapbox-gl-directions.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.1/mapbox-gl-directions.css" type="text/css">
<div id="map"></div>

<script>
	mapboxgl.accessToken = 'pk.eyJ1Ijoic2hpdnU3ODg5IiwiYSI6ImNsZGhkbGdhbzA4Z28zd21lMHR1ZXNpbmEifQ.3PxQZmLwdla0ZFL66b8-nw';
    const map = new mapboxgl.Map({
        container: 'map',
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/mapbox/streets-v12',
        // center: [-79.4512, 43.6568],
        center: [<?php echo $longitude; ?>, <?php echo $latitude; ?>],
        zoom: 13,
        // attributionControl: false
    });

    map.addControl(
        new MapboxDirections({
            accessToken: mapboxgl.accessToken
        }),
        'top-left'
    );
</script>

</body>
</html>