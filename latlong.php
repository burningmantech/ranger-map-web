<?php
echo("[");
$lat = 40.783 + rand(0, 100)/10000.0;
$long = -119.2 + rand(0, 100)/10000.0;
echo('{"event":"2018","number":"1","type":"Law Enforcement","lat":"'.$lat.'","long":"'.$long.'"},');
echo('{"event":"2018","number":"2","type":"Fire","lat":"40.7865","long":"-119.2064"},');
echo('{"event":"2018","number":"3","type":"Test (3:00 2000 ft)", "lat":"40.782628", "long":"-119.201286"}');
echo("]");
?>
