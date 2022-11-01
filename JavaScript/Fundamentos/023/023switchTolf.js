/* 023switchToIf.js/.html: Escribe el código utilizando if..else que corresponda al 
siguiente switch:
switch (navegador) {
  case 'Edge':
    alert( "¡Tienes Edge!" );
    break;
  case ‘Explorer:’
    alert('Vuelve a primero, no hemos conseguido enseñarte nada);
    break;
  case 'Chrome':
  case 'Firefox':
  case 'Safari':
  case 'Opera':
    alert( 'Está bien, soportamos estos navegadores también' );
    break;
  default:
    alert( '¡Esperamos que esta página se vea bien!' );
} */

"use strict";

let navegador = prompt("¿Quieres saber cúal es tu navegador?")

if (navegador == "Edge") {
  alert("¡Tienes Edge!")
}else if(navegador == "Explorer"){
  alert("¡Vuelve a primero! no hemos conseguido enseñarte nada")
}else if(navegador == "Chrome" || navegador == "Firefox" || navegador == "Safari" || navegador == "Opera"){
  alert("Está bien, soportamos estos navegadores también")
}else{
  alert("¡Esperamos que esta página se vea bien!")
}