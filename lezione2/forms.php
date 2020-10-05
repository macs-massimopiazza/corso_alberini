<?php
    $nome = "";
    $saluto = "";
    if(isset($_REQUEST["nome"]) && $_REQUEST["nome"] != "") {
        $nome = $_REQUEST["nome"];
        $saluto = "Ciao, " . $nome;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php if(!(isset($_REQUEST["nome"]))) { ?>
            <h1>Forms</h1>
            <form action="" method="POST">
            <input type="text" name="nome"></input>
            <input type="submit" value="Saluta"></input>
        </form>
        <?php } ?>
        <h1><?=$saluto?></h1>
    </body>
</html>