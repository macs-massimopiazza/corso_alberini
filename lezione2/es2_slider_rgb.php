<?php
    $show = false;
    $r = 255;
    $g = 255;
    $b = 255;
    if(isset($_REQUEST["r"]) && isset($_REQUEST["g"]) && isset($_REQUEST["b"])) {
        $show = true;
        $r = $_REQUEST["r"];
        $g = $_REQUEST["g"];
        $b = $_REQUEST["b"];
        $colore = "rgb($r, $g, $b)";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>🥰🥰🥰🥰🥰🥰</title>
    </head>
    <body
        <?php if ($show) {?>
            style="background: <?=$colore?>;"
        <?php } ?>
        >
            <form action="" method="POST" style="margin: 0 auto; text-align: center; padding-top: 40px;">
            <h1>Crea il tuo colore🥰</h1>
            <div>🔴 <input type="range" min="0" max="255" name="r"></div>
            <div>🟢 <input type="range" min="0" max="255" name="g"></div>
            <div>🔵 <input type="range" min="0" max="255" name="b"></div>
            <input type="submit" value="Colora!" style="margin-top: 20px;"></input>
        </form>
    </body>
</html>