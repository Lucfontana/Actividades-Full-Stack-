let anio = parseInt(prompt("Ingrese un año: "));

// if ((anio % 4 === 0 && anio % 100 != 0) || (anio % 400 === 0)){
//     console.log("El año ", anio, " es bisiesto");
// } else{
//     console.log("El año ingresado no es bisiesto");
// }

(anio % 4 === 0 && anio % 100 != 0) || (anio % 400 === 0) ? console.log("El año ", anio, " es bisiesto") : console.log("El año ingresado no es bisiesto");

