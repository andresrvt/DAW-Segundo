/* 016logicos.js/.html: ¿Cuál será el resultado de las siguientes operaciones?

alert( null || 2 || undefined ); --> 2. Con el operador lógico OR devuelve la expresión en caso de que sea true, si es false, sigue a la siguiente expresión. 
                                     Como null que es el primero que se encuentra por sí solo, no tiene nada, por lo que decimos que es false, 
                                     lo siguiente sería el 2 que alert si es true, por lo que lo mostrará.

alert( alert(1) || 2 || alert(3) ); --> 1 --> 2. alert() no devuelve un valor, lo que devuelve es undefined. Por tanto lo que ocurre es:
                                                 Se evalúa la primera expresión e imprime 1 por pantalla, pero devuelve a OR undefined o lo que es lo mismo, falso.
                                                 Continúa a la siguiente expresión que sería el 2 y como es true, lo imprime.

alert( 1 && null && 2 ); --> null. Como la primera expresión es true, && devuelve la segunda.

alert( alert(1) && alert(2) ); --> 1 --> undefined. Esto se debe a que primero entra y muestra el alert(1), luego como hay un AND, analiza la expresión izquierda.
                                                    alert() devuelve undefined, y como AND necesita que ambas expresiones sean true y undefined es false, el alert() general muestra undefined.


alert( null || 2 && 3 || 4 ); --> 3. Esto ocurre porque, null devuelve false y OR analiza el 2 que duvuelve true, 
                                     pero al haber un AND a continuación, y ser 2 true, muestra el siguiente elemento que es el 3.

*/