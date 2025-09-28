<?php
// Variabel array, encode ke JSON
$bikes = array(
    "Kawasaki",
    "Yamaha",
    "Honda"
);

echo json_encode($bikes);
echo "<br>";

// Variabel JSON, decode ke PHP object
$jsonbikes = '{
    "Aprilia" : 12,
    "Ducati" : 25,
    "KTM" : 9
}';

$obj = json_decode($jsonbikes);

echo $obj->Aprilia;
echo $obj->Ducati;
echo $obj->KTM;
echo "<br>";

// Variabel JSON, decode ke PHP array
$jsonbikes = '{
    "Aprilia" : 12,
    "Ducati" : 25,
    "KTM" : 9
}';

$arr = json_decode($jsonbikes, true);

echo $arr["Aprilia"];
echo $arr["Ducati"];
echo $arr["KTM"];
echo "<br>";
