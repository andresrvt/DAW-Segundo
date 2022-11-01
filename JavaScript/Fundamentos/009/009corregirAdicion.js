/* 009corregirAdicion.js/.html: Aquí hay un código que le pide al usuario dos números y 
muestra su suma. Funciona incorrectamente. El resultado en el ejemplo a continuación 
es 12 (para valores de captura predeterminados). ¿Por qué? Arréglalo. El resultado 
debería ser 3.
 */

// Esto es debido a que el valor devuelto por prompt es un string, entonces a la hora de mostrar concatena ambos string y da como resultado 12.

let a = prompt("¿Primer número?", 1);
let b = prompt("¿Segundo número?", 2);

// Si quisieramos que el resultado fuera 3, tendríamos que pasar las variables a int con parseInt().
a = parseInt(a);
b = parseInt(b);

// Una vez se han pasado los números a Int, ya podemos operar con ellos.
alert(a + b);
