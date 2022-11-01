/* 003constantes.js/.html: Examina el siguiente código:
const cumple = '18.04.1982';
const age = someCode(cumple);
Aquí tenemos una constante cumple para la fecha de cumpleaños, y la edad age, que 
también es constante.
age es calculada desde cumple con la ayuda de “cierto código” someCode(), que es una 
llamada a función que no hemos explicado aún (¡lo haremos pronto!); los detalles no 
importan aquí, el punto es que age se calcula de alguna forma basándose en cumple. 
¿Sería correcto usar mayúsculas en cumple? ¿Y en age? ¿O en ambos?
const CUMPLE = '18.04.1982'; // ¿cumple en mayúsculas?
const AGE = someCode(CUMPLE); // ¿age en mayúsculas? */


/* Las constantes con nombres en mayúscula son utilizadas solamente como alias para valores invariables y preestablecidos. 
Teniendo en cuenta esto, en este caso cumple, es una valor que ya conocemos y no va a cambiar, por lo tanto, lo correcto sería dejarlo en mayúsculas: const CUMPLE = '18.04.1982'. 
Por el contrario, age es calculada con una función, por lo que sería más correcto nombrarla const age = someCode(CUMPLE); */