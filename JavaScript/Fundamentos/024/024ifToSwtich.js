/* 024ifToSwitch.js/.html: escribe el código debajo utilizando solo un argumento switch:
let a = +prompt('a?', '');
if (a == 0) {
  alert( 0 );
}
if (a == 1) {
  alert( 1 );
}
if (a == 2 || a == 3) {
  alert( '2,3' );
} */

"use strict";

let a = prompt("a?")
a = parseInt(a)

switch (a) {
  case 0:
    alert( 0 );
    break;
  case 1:
    alert( 1 );
    break;
  case 2:
    alert( "2,3" );
    break;
  case 3:
    alert( "2,3" );
    break;
}