let num1_dom = document.getElementById("num1");
let num2_dom = document.getElementById("num2");
let resultado_dom = document.getElementById("resultado");
let btn_dom = document.getElementById("btnCalc");


btn_dom.addEventListener("click", ()=> {
     num1 = parseFloat(num1_dom.value);
     num2 = parseFloat(num2_dom.value);
     result = parseFloat(num1 + num2);
     resultado_dom.textContent="Resultado: " + result;
});

