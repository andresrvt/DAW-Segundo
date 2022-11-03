/* 006transformToCani.js/.html: Crear una función que reciba una cadena y la devuelva 
transformada en Cani. Por ejemplo, si le pasamos a la función la cadena "una cadena 
cani es como ésta" obtendremos "UnA KaDeNa kAnI Es kOmO EsTaHHH". Para ello, hay 
que alternar el uso de MAYÚSCULAS y minúsculas, sustituir la letra C por la K y añadir 
tres letras H al final.  */

"use strict"

let cadena = prompt("Escribe una frase");

document.write(toCani(cadena)); 

function toCani(cadena) {

  let cani = "";

  for (let i = 0; i < cadena.length; i++) {
    // Con esta condición, estamos diciendo que cada 2 letras la convirtamos a mayúscula. Con charAt(posicionCadena) conseguimos el caracter de esa posición.
    if (i % 2 == 0) {
      if (cadena.charAt(i) == "c") {
        cani += "K";
      }else if(cadena.charAt(i) == "C"){
        "K";
      }else{
        cani += cadena.charAt(i).toLocaleUpperCase()
      }
    }else{
      if (cadena.charAt(i)== "c") {
        cani += "k";
      }else{
        cani += cadena.charAt(i);
      }
    }
  }
  return cani + "HHH";
}