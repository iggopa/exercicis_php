<?php

// Funciones prestablecidas de php
// isset() --> Permite saber si una variable existe en nuestro programa

// unset() --> Para liberar espacio de memoria de una variable (destruir)

/*
$var = "10";

if(isset($var)) {
  echo "La variable $var existe";
}

unset($var);

if(isset($var)) {
  echo "La variable $var existe";
} else {
  echo "La variable $var no existe";
}
*/

// gettype() --> Nos devuelve el tipo de variable que pasamos por parámetro
// settype() --> Asignamos un tipo de dato a la variable que pasamos por parámetro
// empty() --> Función que mira si una variable está vacía, no existe o su valor es 0
// is_integer(var), is_double(var), is_arry(var), is_string(var) --> Para saber si una variable es integer, double, string, array, etc

// Ex1: for para la tabla de multiplicar del 5; var existe?

// Ex2: mostrar los números pares del 1 al 1000

// Ex3: dibuja una tabla html donde salgan tablas las tablas de multiplicar del 1 al 10

$var = 5;
for ($i = 1;$i <= 10;$i++) {
  echo '5 x ' . $i . " = " . $var * $i . "; ";
};

if (isset($var)) {
  echo 'La variable ' . $var . ' existe';
}

for ($i = 1;$i <= 1000;$i++) {
  if ($i % 2 == 0) {
    echo $i . "; ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table>
    <?php for ($i = 1;$i <= 10;$i++): ?>
      <tr>
        <td><?= $i ?> * 5</td>
        <td><?= $i * 5 ?></td>
      </tr>
    <?php endfor ?>
  </table>
</body>
</html>