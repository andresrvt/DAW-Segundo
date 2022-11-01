/* 007resultadoAsignación.js/.html ¿Cuáles son los valores de ‘a’ y ‘x’ después del código 
a continuación? */

"use strict";

let a = 2;

let x = 1 + (a *= 2); 

/* En esta operacion hay que tener en cuenta dos cosas.
    -La primera es que lo primero que se resuelve es el paréntesis.
    -Lo segunda es que el operador aritmético a *= b, es lo mismo que decir a = a * b  

    Por tanto, la operación se traduciría como: x = 1 + (a = 2 * 2); 
    x = 5
    a = 4
    
 */