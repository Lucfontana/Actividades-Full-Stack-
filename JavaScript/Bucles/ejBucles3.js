// for (let a = 0; a <= 50; a = parseInt(prompt("Ingrese un número"))){
//     if (a > 50){
//             console.log("El número ", a, " es mayor a 50");
//     }
//     console.log("El número ", a, " es menor a 50");
// } 

let a = 0;

while (a <= 50){
    a = parseInt(prompt("Ingrese un número"));

    if (a > 50){
        console.log("El número ", a, " es menor a 50");
    }

    if (a < 50){
        console.log("El número ", a, " es mayor a 50");
    } 

    if (a == 50){
        console.log("Su número es 50");
    }
}