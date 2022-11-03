/* 002rewriteFunction.js/.html: Reescribe la función utilizando '?' o '||'. La siguiente 
función devuelve true si el parámetro age es mayor que 18. De lo contrario, solicita 
una confirmación y devuelve su resultado.
function checkAge(age) {
  if (age > 18) {
    return true;
  } else {
    return confirm('¿Tienes permiso de tus padres?');
  }
}
Reescríbela para realizar lo mismo, pero sin if, en una sola línea.
Haz dos variantes de checkAge:
- Usando un operador de signo de interrogación ?
- Usando OR || */

"use strict"


/* Para resumir el if de arriba en una línea, usamos un condicional ternario donde primero le pasamos la condición,
seguido de las dos opciones que tenemos. */
function checkAge(age) {

 return (age>18) ? true : confirm("¿Tienes permiso de tus padres?");
}


/* En este caso usamos el operador lógico OR, haciendo que haga una cosa u otra dependiendo de la condición */ 
function checkAge2(age) {

  return (age>18) == true || confirm("¿Tienes permiso de tus padres?");
}

checkAge(17);
checkAge(12);

