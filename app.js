const respuesta = document.getElementById("respuesta");
const btnComprobar = document.getElementById("comprobar");


    btnComprobar.addEventListener("click", function() {
        const num1 = Number(document.getElementById("num1").value);
        const num2 = Number(document.getElementById("num2").value)

            if (num1 == num2) {
                alert("Los dos numeros son iguales");
                return;
            }
            
            else if (num1 !== num2) {
                alert("Los dos numeros son diferentes");
                return;
            }
                
            else if (isNaN(num1) || isNaN(num2)) {
                alert("Ingresa solo números");
            }
            else if (length)   
        }
    );


