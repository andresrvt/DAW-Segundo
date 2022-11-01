/* 020iniciarSesion.js/.html: Escribe un código que pregunte por el inicio de sesión con 
propmt. Si el visitante ingresa "Admin", entonces prompt(pregunta) por una 
contraseña, si la entrada es una línea vacía o Esc – muestra “Cancelado.”, si es otra 
cadena de texto – entonces muestra “No te conozco”.
La contraseña se comprueba de la siguiente manera:
- Si es igual a “TheBoss”, entonces muestra “Bienvenido a tu reino, jefe”,
- Si es otra cadena de texto – muestra “Contraseña incorrecta”,
- Para una cadena de texto vacía o una entrada cancelada, muestra “Cancelado.”
Por favor, usa bloques anidados de if. Piensa en la legibilidad general del código.
Pista: si se le pasa una entrada vacía a un prompt, retorna una cadena de texto vacía ''. 
Presionando ESC durante un prompt devuelve null. */

"use strict";

let nombreUsuario = prompt("¿Cúal es el nombre de usuario?");
let contraseña = "";

if (nombreUsuario == "Admin") {

    // Bloque de condiciones en caso de que el nombre de usuario sea correcto.
  contraseña = prompt("¡Correcto!. Escriba la contraseña.");
    if (contraseña == "TheBoss") {
        alert("Bienvenido a tu reino, jefe")
    }else if(contraseña == null || contraseña == ""){
        alert("Cancelado")

    // Bloque de condiciones en caso de que el nombre de usuario sea incorrecto.    
    }
  }else if(nombreUsuario == null || nombreUsuario == ""){
    alert("Cancelado")
  }else{
    alert("No te conozco");
}