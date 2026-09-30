<?php

// Definición de la función
// fucntion nomFuncion($arg1, $arg2) {
//   Código de la función
//   return valor o no
// }

function funcionTest() {
  $var = 10;
  return $var;
}

// Como la función tiene un return, tengo que igualarla a un avariable para recoger el valor del return

$var_fun = funcionTest();

echo "La variable igualada a la función vale: $var_fun <br>";

// Función sin return

function funcionTestSin() {
  $var = 20;
  echo "La variable dentro de la función vale: $var <br>";
}

funcionTestSin();

// Cómo podemos utilizar dentro de las funciones variables globales

$var2 = 50;

function funcionConGlobal() {
  // Para poder utilizar una variable fuera del ámbito de la función se utiliza la palabra reservada global
  global $var2;
  echo "La variable var2 fuera de la función vale: $var2";
}

funcionConGlobal();

// Recursividad
function factorial($numero) {
  if ($numero == 1) {
    return $numero;
  }
  else {
    return $numero * factorial($numero - 1);
  }
}

echo "El factorial de 7 es factorial"

?>