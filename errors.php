<?php
/**
* Aquest fitxer té 6 errors. Alguns aturen la pàgina, altres no.
* Abans de començar, assegura't que veus els errors: si la pàgina
* surt en blanc, revisa la configuració de l’Exercici 1.
*/

const IVA = 0.21;

# botiga = 'Tienda Molona';
$botiga = 'Tienda Molona';

# $producte = 'Producto to flama'
$producte = 'Producto to flama';

$preu = 34.90;
$unitats = 2;

$subtotal = $preu * $unitats;
# $importIva = $subtotal * $IVA;
$importIva = $subtotal * IVA;
$total = $subtotal + $importIva;
?>
<!DOCTYPE html>
<html lang="ca">
<head>
   <meta charset="utf-8">
   <title>Tiquet</title>
</head>
<body>
   <h1><?= $botiga ?></h1>

   <p>Producte: <?= $producte ?></p>
   <p>Unitats: <?= $unitats ?></p>

   <p>Preu unitari: <?= $preu ?> EUR</p>
   <p>Subtotal: <?= $subtotal ?> EUR</p>

   <p>IVA: <?= $importIva ?> EUR</p>
   <p>Total: <?= $total ?> EUR</p>
</body>
</html>
