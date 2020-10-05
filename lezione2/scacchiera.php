<?php

$null = false;

if (isset($_REQUEST['lunghezza']) && isset($_REQUEST['altezza'])) {
    $lunghezza = $_REQUEST['lunghezza'];
    $altezza = $_REQUEST['altezza'];
    if (($lunghezza <= 0) || ($altezza <= 0)) {
        $null = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>♟️♟️♟️♟️♟️</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        h1, a {
            text-align: center;
            display: block;
            margin-top: 20px;
        }

        table {
            border-spacing: 0;
            border: 2px solid #000;
            margin: 0 auto;
        }

        td {
            width: 70px;
            height: 70px;
        }

        td.white {
            background-color: #fff;
        }

        td.black {
            background-color: #000;
        }
    </style>
</head>
<body>
    <div class="main">
    <?php if ($null) { ?>
        <h1>🙅‍♂️ We coglione la schacchiera <?=$lunghezza?>x<?=$altezza?> non va bene, inserisci numeri pari diversi da 0🙅‍♂️</h1>
        <a href="scacchieraForm.php"><button>Fanne un'altra, stavolta fatta bene</button></a>
   <?php } else { ?>
        <h1>😁 Ecco la tua scacchiera <?=$lunghezza?>x<?=$altezza?> 😁</h1>
        <table>
            <?php for($i = 0; $i < $altezza; $i++) { ?>
                <tr>
                    <?php for($j = 0; $j < $lunghezza; $j++) {?>
                        <?php if (($i + $j) % 2 == 0) {?>
                            <td class="white"></td>
                        <?php } else { ?>
                            <td class="black"></td>
                        <?php } ?>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
        <a href="scacchieraForm.php"><button>Fanne un'altra</button></a>
        <?php } ?>
    </main>
    
</body>
</html>