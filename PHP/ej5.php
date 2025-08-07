<!-- Implementar en php un programa que cargue n array de frutas. Aniadir una funcion que devuelva
 cuantas de esas frutas tienen entre 5 y 7 letras 
     -->

<?php
$frutas = ["manzana 🍎", "banana 🍌", "pera", "sandia 🍉", "mandarina", "melon", "naranja 🟠", "kiwi"];
$frutasTotales=0;

function cantidadLetras($frutas, $frutasTotales){
        for ($i = 0; $i < count($frutas); $i++){
        if (strlen($frutas[$i]) >=  5 && strlen($frutas[$i]) <= 7){
            $frutasTotales++;
            echo "<li style=\n'background-color: green;'>" . strtoupper($frutas[$i]) . "</li>";
        } 
        else if (strlen($frutas[$i]) > 7){
            echo "<li style=\n'background-color: purple;'>" . strtolower($frutas[$i]) . "</li>";  
        }
    }
        echo "La cantidad total de frutas que tiene entre 5 y 7 caracteres son: " . "<span>" . $frutasTotales . "</span>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas</title>

    <style>
        ol{
            background-color: #f08989ff;
            padding: 30px;
            border-radius: 30px;
        }
        p{
            background-color: #e26d6dff;
            padding: 30px;
            border-radius: 30px;
        }
        span {
            background-color: #df4a4aff;
            font-size: 20px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Cuantas frutas del Array tienen entre 5 y 7 letras?</h1>

    <ol>
    <?php cantidadLetras($frutas, $frutasTotales); 
    ?>
    </ol>

</body>
</html>