/* 022numPrimos.js/.html: Un número entero mayor que 1 es llamado primo si no puede 
ser dividido sin un resto por ningún número excepto 1 y él mismo. En otras palabras, n 
> 1 es un primo si no puede ser divido exactamente por ningún número excepto 1 y n.
Por ejemplo, 5 es un primo, porque no puede ser divido exactamente por 2, 3 y 4. 

Escribe el código que muestre números primos en el intervalo de 2 a n.
Para n = 10 el resultado será 2, 3, 5, 7.
PD. El código debería funcionar para cualquier n, no debe estar programado para 
valores fijos.
¿Puedes hacerlo con los 3 tipos de bucle? Demuéstralo.
*/

"use strict";

// No he encontrado ninguna otra forma de hacerlo que funcionara. Sé que no es lo que se pedía, pero al menos hay una forma.
let numero = prompt("Escriba un número y se mostrarán sus primos");
numero = parseInt(numero);

function esPrimo(numero) {
    
  for(let i = 2,raiz=Math.sqrt(numero); i <= raiz; i++)
      if(numero % i === 0) return false;
  return numero > 1;
}
  for (let j=0;j<=numero;j++) {
    if (esPrimo(j))
        document.write("El número " + j + " es primo<br>");
}