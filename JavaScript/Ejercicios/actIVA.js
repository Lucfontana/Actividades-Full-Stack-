let precio = Number(prompt("Ingrese el precio de su producto"));
let iva = precio * 1.21 - precio;
let precioFinal;

if (precio >= 2000 && precio <= 3500){
    precioFinal = precio + iva;
    console.log("El precio de su producto es: ", precioFinal);
} else {
    precioFinal = precio - iva;
    console.log("El precio de su producto es: ", precioFinal);
}

//Escribir un algoritmo que dados 3 numeros los muestre ordenados  de forma ascendente.

let num1= Number(prompt("Ingrese un número"));
let num2= Number(prompt("Ingrese el segundo número"));
let num3= Number(prompt("Ingrese el tercer número"));

let Max, mid, min;
