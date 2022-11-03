/* 003minimize.js/.html: Función min(a, b)
Escriba una función min(a,b) la cual devuelva el menor de dos números a y b.
Por ejemplo:
min(2, 5) == 2
min(3, -1) == -1
min(1, 1) == 1 */

"use strict"

let a = 3,
b = 5;

// Creamos la función pasándole los valores de a y b. 
function minimize(a,b){
  // Hacemos la comparación con el IF. Se mostrará la menor de las expresiones.
  if (a>=b) {
    document.write(b)
  } else {
    document.write(a)
  }
}

minimize(a,b);
