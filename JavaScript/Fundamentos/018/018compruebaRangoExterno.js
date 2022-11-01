/* 018compruebaRangoExterno.js/.html: Escribe una condición if para comprobar que 
age NO está entre 18 y 99 inclusive. Crea dos variantes: la primera usando NOT, y la 
segunda sin usarlo. */

let edad = prompt("¿Cuántos años tienes?");

if (!(edad >= 18) || !(edad <= 99)) {
    alert("No está dentro del rango 18-99 años")
    
}else{
    alert("Está está dentro del rango 18-99 años")
} 

if (edad <= 18 || edad >= 99) {
    alert("No está dentro del rango 18-99 años")
}else{
    alert("Está está dentro del rango 18-99 años")
}

