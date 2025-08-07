<?php

// Implementar un algoritmo que dado el precio de un producto muestre con un descuento del 10%
//  si este cuesta entre 2000 y 3500 pesos, un 15% si cuesta mas de 3500, en caso contrario no
//  aplicar ningún descuento e inf     ormar "No aplica descuento"

    $descuento = 0;
    $precioFinal = 0;


    // Luca pasame link al server 
    // como http://192.168.56.1:3000/PHP/ejercicio2.php
    
    function calcularDescuento($precioProducto) {
            if ($precioProducto >= 2000 && $precioProducto <= 3500)
            {
                $descuento = ($precioProducto * 10) / 100;
                echo "Descuento del %10.<br>";
            }
            else if ($precioProducto > 3500)
            {
                $descuento = ($precioProducto * 15) / 100;
                echo "Descuento del %15.<br>";
            }
            else
            {
                $descuento = 0;
                echo "No aplica descuento.<br>";
            }

            $precioFinal = $precioProducto - $descuento;
            echo "El precio final de su producto es: " . $precioFinal . "<br>";
    }

calcularDescuento(3000);
calcularDescuento(1500);