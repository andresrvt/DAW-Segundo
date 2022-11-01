/* 008conversionesTipos.js/.html: ¿Cuáles son los resultados de estas expresiones?


"" + 1 + 0 --> 10. Esto es debido a que lo primero que se encuentra son "", por tanto, el símbolo + lo traduce como concatenación, no como operador aritmético.

"" - 1 + 0 --> -1. Se da este resultado debido a que el símbolo - actúa como operador aritmético y no concatena,
                   esto afecta a lo que hay después, ya que el siguiente + también es un operador.
                   Además, esto es posible a que el string esta vacío, si hubiera algo escrito dentro de las "" el resultado sería NaN, ya que no se puede restar un número a un texto.

true + false --> 1. Si tenemos en cuenta que false = 0 y que true = 1, en caso de operar con ellos el navegador devuelve la suma numérica. true + true = 2.

6 / "3" --> 2. En este caso mientras uno de los dos o ambos lleves comillas por separado, se podrá realizar la operación normal, pero si el caso fuera "6 / 3", el resultado sería ese mismo.

"2" * "3" --> 6. Es el mismo caso que explique antes, ambos llevan comillas por separado.

4 + 5 + "px" --> 9px. Al encontrarse con el texto como útimo elemento, realiza la primera operación y usa el siguiente símbolo + como concatenación.

"$" + 4 + 5 --> $45. Misma situación que el primer caso, primero se encuentra texto, por lo que todos los + son concatenación.

"4" - 2 --> 2. Mismo caso que los anteriores, mientras uno o ambos lleven comillas por separado, los trata como números.

"4px" - 2 --> NaN. Lo primero es un texto y lo segundo un número. No se puede operar texto con números.

"  -9  " + 5 --> -9  5. Este caso es distinto a los demás, esto es debido, a que al abrir las comillas y haber justo detrás un símbolo +, hace que + sirva como concatenación y nos muestra en interior de las comillas tal cual.

"  -9  " - 5 --> -14. Este caso sí es como los anteriores porque - es un operador y el interior de las comillas funciona como un número.

null + 1 -> 1. En el momento en que se intenta operar con null, éste toma el valor 0, es decir, null + null = 0. Sin embargo, si se mostrara null solamente el resultado sería = null.

undefined + 1 --> NaN. Un número que está indefinido no puede operar con nada.

" \t \n" - 2 --> -2. Tanto \t como \n son caracteres especiales que se usan para realizar algún tipo de función. \t es para una tabulación horizontal, 
                     mientras que \n sirve para hacer un salto de línea. No afectan a la hora de mostrar por pantalla por lo que lo único visible sería el -2.

*/ 

