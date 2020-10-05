<?php
//controller    

for($i = 0; $i < 100; $i++) {
    $lista[] = rand(1, 500);
}

$lista2 = [1,2,3,4,5,6];

$lunghezza = count($lista);

$somma = array_sum($lista);

$media = $somma / $lunghezza;

$min = min($lista);

$max = max($lista);

$scartoQuadratico = std($lista);

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

function gaus($array) {
    $lunghezza = count($array);

    return ($lunghezza*($lunghezza + 1))/2;
}

?>

<!-- view -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Leskere</title>
        <style>
            table {
                border: solid 1px;
                margin: 0 auto;
            }
            td, th {
                padding: 10px;
                text-align: center;
            }

            th {
                background-color: rgba(255, 150, 0, .6);
                font-size: bold;
            }

            td {
                background-color: rgba(0, 120, 200, .3);
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <th>Lunghezza</th>
                <th>Somma</th>
                <th>Media</th>
                <th>Minimo</th>
                <th>Massimo</th>
                <th>Deviazione Standard</th>
            </thead>
            <tr>
                <td><?=$lunghezza?></td>
                <td><?=$somma?></td>
                <td><?=$media?></td>
                <td><?=$min?></td>
                <td><?=$max?></td>
                <td><?=$scartoQuadratico?></td>
            </tr>
        </table>
        <?php foreach($lista as $elemnt) { ?>
            <?=$elemnt?>
        <?php } ?>
        <h3>Somma gaussiana wow: <?=gaus($lista2)?></h3>
    </body>
</html>