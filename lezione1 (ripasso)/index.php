<?php
echo  "<h1>ciao frate</h1>";

$gionny = "Gionny è un tossico";

echo $gionny;

$snake_case = "snake_case";
$camelCase = "camelCase";
//$kebab-case

$lista = ["uno", "due", "tre"];

echo "</br>";
echo $lista[0];
echo "</br>";

$dict = [
    "chiave" => "valore",
    "numero" => 10,
    "array" => $lista,
];

echo $dict["chiave"];
echo "<br>";
echo $dict["numero"];
echo "<br>";
echo var_dump($dict["array"]);
echo "<br>";
echo var_dump($dict);
echo "<br>";
echo "<br>";
echo "<br>";

//istruzioni condizionali
$eta = 18;
$gioviness = 4;
echo "Età: " . $eta . "<br>";


if ($eta >= 18 && $gioviness >= 3) {
    echo "sei maggiorenne e sei un super giovi<br>"; 
} else {
    echo "Niente patente per te e ti manca trada per essere come il gionny<br>"; 
}

echo "<br>";
echo "<br>";

//ciclo for
for ($i = 0; $i < 10; $i++) {
    echo $i . " ";
}

echo "<br>";

for ($j = 0; $j < count($lista); $j++) {
    echo "Lista[" . $j ."] = " . $lista[$j] . "<br>";
}

foreach($lista as $chiave => $valore) {
    echo $chiave . " = " . $valore . "<br>";
}


$r = 255;
$g = 200;
$b = 0;

$color = "rgb(" . $r . "," . $g . "," . $b . ");";

?>

<html>
    <body style="background: rgb(<?=$r?>,<?=$g?>,<?=$b?>)">  
        <!-- <div style="width: 400px; height: 400px; margin: 0 auto; background: <?=$color?>"> -->
        </div>
    </body>
</html>