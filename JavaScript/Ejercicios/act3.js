//3- Dado el valor de un artículo de electrónica, 
// mostrar este en pesos, dolares y euros.

let precioPesos= parseInt(prompt("Ingrese precio de su producto en pesos"));

let euro, dolar;

euro = precioPesos / 50;
dolar = precioPesos / 42;

console.log("El precio en EUROS es: ", euro);
console.log("El precio en DÓLARES es: ", dolar);