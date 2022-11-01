/* 010comparaciones.js/.html: ¿Cuál será el resultado de las siguientes expresiones? 

5 > 4 --> true. Como lo que estamos haciendo es comparar dos números con el mayor que '>', nos devuelve que el resultado es verdadero, ya que 5 es mayor que 4.

"apple" > "microsoft" --> false. Al comparar dos cadenas, primero compara la letra con la que empiezan ambas cadenas, en caso de que una sea mayor o menor que la otra alfabéticamente, ya devuelve el resultado.
                                 Por el contrario, si son iguales, seguiría comparando. En este caso como 'a' en el alfabeto ocupa la posición 1 y 'm' la 13, 1 > 13 = false.

"2" > "12" --> true. Es como el anterior, al tratar ambos como cadenas, compara el primer elemento de cada una: 2 > 1 = true.

undefined == null --> true. Cuando usamos == comparamos si el valor de los dos elementos es el mismo. 
                            En este caso da true debido a que el hecho de estar indefinido y ser nulo en js lo toma como el mismo valor.

undefined === null --> false. Sin embargo, con === lo que buscamos es identidad en valor y tipo. Ya que undefined y null no son del mismo tipo, devuelve false.

null == "\n0\n" --> false. Es falso debido a que no es lo mismo valor 0 que nulo. null solo es igual a undefined.


null === +"\n0\n" --> false. Mismo caso de antes, pero con identidad. Distintos tipos y valores.

 */

