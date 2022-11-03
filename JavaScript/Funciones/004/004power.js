/* 004power.js/.html: Función pow(x,n): Escriba la función pow(x,n) que devuelva x como 
potencia de n. O, en otras palabras, multiplique x por si mismo n veces y devuelva el 
resultado.
pow(3, 2) = 3 * 3 = 9
pow(3, 3) = 3 * 3 * 3 = 27
pow(1, 100) = 1 * 1 * ...* 1 = 1
Cree una página web que solicite x y n, y luego muestre el resultado de pow(x,n).
Nota: La función solo debe admitir valores naturales de n: enteros desde 1. */

"use strict"


let x = prompt("Elija un número")
let n = prompt("Elija la potencia")

// Como prompt nos devuelve un string, tendremos que pasarlo antes a int para poder operar con ellos.
x = parseInt(x)
n = parseInt(n)

document.write(pow(x,n));

function pow (x,n) {
  // El operador aritmético ** sirve para hacer la potencia de un número. Es decir, 2**3= 8.
  let resultado = x**n;
  return resultado;
}
