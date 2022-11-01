/* 004compruebaComillas.js/.html: ¿Cuál es la salida del script? Piénsalo y combruébalo.*/

"use strict";

let name = "Peter Parker";

// Cuando usamos comillas simples o backticks podemos incrustar variables o expresiones dentro de un string con ${}.

alert( `Hola ${1}` ); // Como lo que hay dentro de las llaves es un número entero, solo mostrará dicho número. Podríamos realizar operaciones dentro y mostraría el resultado, p.e: ${1+1}=2 (Siempre y cuando no haya comillas)
alert( `Hola ${"name"}` ); // Al estar name entre comillas, trata todo lo que hay dentro como un string, no como una variable, por lo que el mensaje que aparece por pantalla es name.
alert( `Hola ${name}` ); // En este caso si trata name como variable, por lo que el mensaje que aparece es el valor que le hayamos designado a name (Peter Parker).

