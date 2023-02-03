<!-- <!DOCTYPE html>
<html>
<head>
<title>Geo City Locator by geolocation-db.com</title>
</head>
<body>
    <div>Latitude: <span id="latitude"></span></div>
    <div>Longitude: <span id="longitude"></span></div>
    <div>IP address: <span id="ipv4"></span></div>                             
</body>
<script>

    var latitude = document.getElementById('latitude');
    var longitude = document.getElementById('longitude');
    var ip = document.getElementById('ipv4');

    function callback(data)
    {
        latitude.innerHTML = data.latitude;
        longitude.innerHTML = data.longitude;
        ip.innerHTML = data.IPv4;
    }

    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://geolocation-db.com/json/geoip.php?jsonp=callback';
    var h = document.getElementsByTagName('script')[0];
    h.parentNode.insertBefore(script, h);

</script> 
</html> -->


<?php

    $json = file_get_contents('https://geolocation-db.com/json');
    $data = json_decode($json);

    // print $data->country_code . '<br>';
    // print $data->country_name . '<br>';
    // print $data->state . '<br>';
    // print $data->city . '<br>';
    // print $data->postal . '<br>';
    // print $data->latitude . '<br>';
    // print $data->longitude . '<br>';
    // print $data->IPv4 . '<br>';
    $longitude = $data->longitude;
    $latitude = $data->latitude;
    $ip = $data->IPv4;
    echo $longitude;


?>