<?php

$eta = 55;
$marviness = 4;

echo "Età: " . $eta . "<br> Marviness: " . $marviness . "<br><br>";

if(!($eta >= 0 && $eta <= 150)) {
    die("Sei un vecchio di merda we");
}

if(!($marviness >= 1 && $marviness <= 5)) {
    if($marviness < 1) {
        die("Mi dispiace hai il moccio troppo corto");
    } else if($marviness > 5) {
        die("Hai esagerato con la marviness, calmati");
    }
}

if(($eta >= 0 && $eta <= 150) || ($marviness >= 1 && $marviness <= 5)) {
    die("Sei perfetto grande marvin");
}
?>
