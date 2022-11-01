/* 017compruebaRangoInterno.js/.html: Escribe una condición “if” para comprobar que 
age(edad) está entre 18 y 99 inclusive. “Inclusive” significa que age puede llegar a ser 
uno de los extremos, 18 o 99. */

let edad = prompt("¿Cuántos años tienes?");

if (edad >= 18 && edad <= 99) {
    alert("Está dentro del rango 18-99 años")
}else{
    alert("No está dentro del rango 18-99 años")
}