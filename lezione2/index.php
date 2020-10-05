<?php
//controller

echo "Evviva le funzioni!<br>";

$lista = [1,2,3,4,5];

$lista[] = 6;

$lunghezza = count($lista);

$somma = array_sum($lista);

$media = $somma / count($lista);

$min = min($lista);

$max = max($lista);

$scartoQuadratico = std($lista);

$numeroCasuale = rand(1,100);

function std($array) {
    $somma = 0;
    $lunghezza = count($array);
    $media = array_sum($array) / $lunghezza;
    foreach($array as $element) {
        $scarto = ($element - $media)**2;
        $somma += $scarto;
    }
    $somma = $somma / $lunghezza;
    $somma = sqrt($somma);
    return $somma;
}

?>

<!-- view -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Leskere</title>
    </head>
    <body>
        <h1>Lunghezza: <?=$lunghezza?></h1>
        <h1>Somma: <?=$somma?></h1>
        <h1>Media: <?=$media?></h1>
        <h1>Minimo: <?=$min?></h1>
        <h1>Massimo (non io xddlodldodlollolololo): <?=$max?></h1>
        <h1>Scarto quadratico cash money gang medio: <?=$scartoQuadratico?></h1>
        <h1>Numero casuale: <?=$numeroCasuale?></h1>

    </body>
</html>