<?php

// 1
var_dump($x);

// Esta sentencia daba error ya que la variable no está definida. Para solucionarlo simplemente tenemos que declarar la variable.
$x = 4;

// 2
print_r($dades);
var_dump($x);

// Mismo caso, se está intentando mostrar el valor de una variable que no hemos definido. Lo solucionamos de la misma manera.
$dades = true;
print_r($dades);

// 3
$total = $base * (1 + IVA);

// Otro caso igual
$base = 5;
$total = $base * (1 + IVA);

// 4
$missatge = "Hola";

function saluda() {
  echo $missatge;
  $intern = "Adeu";
}

// Este es un caso similar, ya que es el mismo tipo de Warning, pero funciona de manera diferente, ya que la variable sí que está declarada, pero fuera de la función.
// La forma de solucionarlo es simplemente declarando la variable dentro de la función.

function saluda2() {
  $missatge = "Hola";
  echo $missatge;
  $intern = "Adeu";
}

// 5
echo $intern;

// Mismo caso que los anteriores, hacemos lo mismo
$intern = "Adeu";
echo $intern;