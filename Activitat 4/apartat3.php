<?php
declare(strict_types=1);

/**
 * Mostra el preu amb IVA fent servir echo.
 *
 * @param float $base Preu base del producte.
 * @return void
 */
function preuAmbIvaEcho(float $base): void
{
    echo $base * 1.21;
}

/**
 * Calcula i retorna el preu amb IVA.
 *
 * @param float $base Preu base del producte.
 * @return float Preu amb IVA.
 */
function preuAmbIva(float $base): float
{
    return $base * 1.21;
}

/**
 * Formata un preu amb dos decimals.
 *
 * @param float $preu Preu a formatar.
 * @return string Preu formatat.
 */
function formatPreu(float $preu): string
{
    return number_format($preu, 2, ',', '.') . ' EUR';
}

?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 3</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<?php

/* Exercici 2 */

$preus = [10, 25.5, 40];
$total = 0;

foreach ($preus as $preu) {
    $total += preuAmbIva($preu);
}

echo "<p>Total amb IVA: " . formatPreu($total) . "</p>";

$max = max($preus);

echo "<p>Preu més car amb IVA: "
    . formatPreu(preuAmbIva($max))
    . "</p>";

/*
No podem fer això:

$total += preuAmbIvaEcho($preu);

perquè preuAmbIvaEcho() no retorna cap valor.
Només escriu el resultat per pantalla (echo)
i el seu tipus és void.

Per tant, no es pot sumar ni guardar el resultat.
*/

?>

</body>
</html>