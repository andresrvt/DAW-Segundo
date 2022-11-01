/* 012nombreJS.js/.html: Usando el constructor if..else, escribe el código que pregunta: 
‘¿Cuál es el nombre “oficial” de JavaScript?’ Si el visitante escribe “ECMAScript”, 
entonces muestra: “¡Correcto!”, de lo contrario muestra: “¿No lo sabes? 
¡ECMAScript!” */

"use strict";

let nombreJS = prompt("¿Cúal es el nombre \"oficial\" de JavaScript?");

if (nombreJS == "ECMAScript") {
  alert("¡Correcto!");
}else{
  alert("¿No lo sabes?¡ECMAScript!");
}
