/* 005tempToZero.js/.html: Crear una función temporizador que reciba como parámetro 
los minutos y segundos de duración de éste, de modo, que cada segundo mostrará por 
consola el tiempo que le queda al temporizador hasta llegar a 0. La función recibirá dos 
parámetros, con los minutos y los segundos, pero en el caso que sólo le pasemos un 
parámetro, considerará que son los segundos desde donde comenzará la cuenta atrás. 
Por ejemplo:
temporizador(77); // le pasamos 77 segundos
temporizador(2,50); // le pasamos 2 minutos y 50 segundos */

"use strict"

let minutos = prompt("Añada la cantidad de minutos para la cuenta atrás");
let segundos = prompt("Añada la cantidad de segundos para la cuenta atrás");

minutos = parseInt(minutos)
segundos = parseInt(segundos)


function temporizador(minutos,segundos) {

  // Necesitaremos saber la cantidad de segundos totales para poder operar con una sola unidad.
  let sumSegundos = segundos + (minutos*60);

  // Con setInterval conseguimos que se ejecute una función con un tiempo de retraso que queramos. Para ello le pasaremos primero la función y después el tiempo de retraso en milisegunos. (1000ms = 1s)
  let temporizadorSegundos = setInterval(() => {
    if (sumSegundos > 0) {
      console.log(sumSegundos);
      sumSegundos--
    }    
    if (sumSegundos == 0) {
      console.log("Fin de la cuenta atrás")
      clearInterval(temporizadorSegundos)
    }
    }, 1000);
  }

  temporizador(minutos,segundos);