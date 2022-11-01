/* 006sufijoPrefijo.js/.html: ¿Cuáles son los valores finales de todas las variables a, b, c y 
d después del código a continuación? */

"use strict";

let a = 1, b = 1;

let c = ++a; /* Cuando ponemos ++variable, el valor de la variable se incrementa en 1 ANTES de realizar la asignación. 
                Por tanto 'a' antes de asignarle el valor a 'c' valía 2, por lo que c = 2 y a = 2*/
                
let d = b++; /* Sin embargo, cuando ponemos variable++, el valor de la variable se incrementa en 1 DESPUÉS de realizar la asignación. 
                En este caso 'b' vale 1 y hasta que no realiza la asignación, no incrementa su valor.
                Es decir, al terminar de ejecturarse d = 1 y b = 2 */
