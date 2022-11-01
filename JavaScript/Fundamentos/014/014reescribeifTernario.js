/* 014reescribeIfTernario.js/.html: Reescriba esta condición if usando el operador 
ternario:
let result,
if (a + b < 4) {
  result = 'Baja la ropa sucia';
} else {
  result = 'Sube los zapatos';
}
 */

a = 1,
b = 5;

// Para if ternario se escribe primero la condición, seguido de las expresiones que queramos. Se usa como atajo al if tradicional.
let ifTernario = (a+b<4) ? "Baja la ropa sucia" : "Sube los zapatos";

alert (ifTernario);