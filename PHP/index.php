<?php
    $user_var = "usuarioPepe";
    $admin_var = "Admin";
    $privilegio = true;

    if (!$privilegio) {
        echo "<p style = 'background-color: orange'> sos: " . $user_var . "</p>";
    }
    else {
        echo "<p style='background-color: green'> sos: " . $admin_var . "</p>";
    }

PHP:
// Implementar un algoritmo que dado el precio de un producto muestre con un descuento del 10% si este cuesta entre 2000 y 3500 pesos, un 15% si cuesta mas de 3500, en caso contrario no aplicar ningún descuento e informar "No aplica descuento"