/* 001requiredElse.js/.html: ¿Es "else" requerido?
La siguiente función devuelve true si el parámetro age es mayor a 18. De lo contrario, 
solicita una confirmación y devuelve su resultado:
function checkAge(age) {
  if (age > 18) {
    return true;
  } else {
    // ...
    return confirm('¿Tus padres te permitieron?');
  }
}
¿Funcionará la función de manera diferente si se borra else? ¿Hay alguna diferencia en 
el comportamiento de estas dos variantes? */

"use strict";

function checkAge(age) {
    if (age > 18) {
      return true;
    }  
      return confirm('¿Tus padres te permitieron?');
  }
  checkAge(15);

  /* Funciona exactamente igual, debido a que nos encontramos en una función. 
  Como en esta función lo que queremos es analizar edad, necesitaremos que la función nos devuelva el resultado de comprobarla con el return.
  En caso de que no cumpla la condición del if, la función necesita devolver algo, por lo que el siguiente return haría la misma función que el else, pero no es un else. 
  Es decir, si fuera el mismo caso, pero fuera de una función o en una función void, el else no se comportaría de la misma forma y por tanto no funcionaría como en este ejemplo.
  */