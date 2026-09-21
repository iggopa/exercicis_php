<?php

const IVA = 0.21;

$producte = "Teclat";
$base = 79.90;
$estoc = 4;

$total = round($base * (1 + IVA), 2);

?>

<h2><?php echo $producte?></h2>

<p>Preu amb IVA: <?= $total; ?> EUR</p>

<p>Disponibilitat: <?= $estoc ?></p>

<?php

$nombre = "Ignacio";
$apellidos = "González Pagniello";
$dirección = "Carrer Rambla, 3";

?>

<h2>Datos personales</h2>

<p>Nombre: <?php echo $nombre?></p>
<p>Apellidos: <?php echo $apeelidos?></p>
<p>Dirección: <?php echo $dirección?></p>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRes formas</title>
</head>
<body>
  <h1>Tres formas y el mismo resultado</h1>

  <!-- Forma 1: php escribe toda la etiqueta <p>-->
   <?php echo "<p>Hola, $nom</p>"; ?>

  <!-- Forma 2: html está fuera, php solo pone el valor-->
   <p>Hola <?= $nom ?></p>

  <!-- Forma 3: El de toda la vida-->
  <p>Hola pepito</p>
</body>
</html>