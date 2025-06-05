//5-Calcular area de un circulo, cuadrado y rectángulo

alert("CALCULADOR DE ÁREA: Digite el número de su figura correspondiente a calcular");

let opc = parseInt(prompt("1- Cuadrado, 2- Rectángulo, 3-Círculo"));

let lado, lado1, lado2, radio, pi, resultado;
pi = 3.14;

if (opc = 1){
    lado = parseInt(prompt("Ingrese medida de un lado:"));
    resultado = lado * lado;
} else if (opc = 2) {
    lado1 = parseInt(prompt("Ingrese medida de un lado:"));
    lado2 = parseInt(prompt("Ingrese medida del otro lado (base):"));

    resultado = lado1 * lado2;
} else if (opc = 3){
    radio=parseInt(prompt("Ingresa radio de tu circulo"));

    resultado = (radio * radio) / pi;
} else {
    resultado = "Elegiste una opción no válida";
}

console.log("El resultado es: ", resultado);