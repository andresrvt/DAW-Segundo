/* 013muestraSigno.js/.html: Usando el constructor if..else, escribe un código que 
obtenga a través de un prompt un número y entonces muestre en un alert:
 1, si el valor es mayor que cero,
 -1, si es menor que cero,
 0, si es igual a cero.
En la tarea asumimos que siempre el usuario introduce un número. */

"use strict";

let numero = prompt("Introduzca un número");

if (numero>0) {
  alert("El número es mayor que 0");
}else if(numero<0){
  alert("El número es menor que 0");
}else{
  alert("El número es igual que 0");
}
