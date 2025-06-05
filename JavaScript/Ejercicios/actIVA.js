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