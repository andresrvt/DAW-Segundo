/* 019if.js/.html: ¿Cuáles de estos alerts va a ejecutarse? ¿Cuáles serán los resultados de 
las expresiones dentro de if(...)?
if (-1 || 0) alert( "primero" );
if (-1 && 0) alert( "segundo" );
if (null || -1 && 1) alert( "tercero" ); */

if (-1 || 0) alert( "primero" );
if (-1 && 0) alert( "segundo" );
if (null || -1 && 1) alert( "tercero" ); 

/* Muestra el primero y tercero debido a que 0 devuelve false. Por tanto:
    - En primer caso, tenemos un OR y nada más entrar -1 ya le devuelve true, por lo que se muestra el mensaje.
    - En el segundo, al ser un AND y 0 devolver false, los dos no son true, por lo que no se muestra el mensaje.
    - Por último, tenemos primero un OR en el que -1 le devuelve true. Después, hay un AND, pero al ser ya true el -1 y ser también true el 1 final, muestra en mensaje.
    */