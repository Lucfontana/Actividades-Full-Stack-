<?php
    $meses=["enero", "febrero", "marzo", "abril", "mayo", "junio","julio", "agosto", "setiembre",
             "octubre", "noviembre", "diciembre",];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del año</title>
</head>

<style>
    ul {
        background-color: #8c9cdcff;
        padding: 30px;
        border-radius: 30px;
    }
    .cuenta-meses{
        color: red;
    }
</style>
<body>
    <h1>Meses del año!!</h1>
    <ul>
        <?php
        foreach ($meses as $mes){
            echo "<li>" . $mes . "</li>";
        }
        ?>
    </ul>
    <h1 class='cuenta-meses'>
    <?php echo count($meses) //Contar elementos del array meses
    ?>
    </h1>
</body>
</html>