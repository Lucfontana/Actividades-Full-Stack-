let x = parseInt(prompt("Ingrese un número"));

let y = parseInt(prompt("Ingrese otro número"));

if (x >= y) {
    for (let i = x; i >= y; i--){
        console.log(i);
    }
} else {
    for (let i = x; i <= y; i++){
        console.log(i);
    }
}

//Si x es mayor que y, hace una cuenta regresiva desde X hasta llegar al valor de y
//En caso contrario, si Y es mayor que X, 