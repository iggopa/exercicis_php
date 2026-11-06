<?php
declare(strict_types=1);

/**
 * Calcula el preu amb IVA.
 *
 * @param float $base Preu base del producte.
 * @param float $iva Percentatge d'IVA a aplicar.
 * @return float Preu final amb IVA.
 */
function preuAmbIva(float $base, float $iva = 0.21): float
{
    return round($base * (1 + $iva), 2);
}

/**
 * Aplica un descompte a un preu.
 *
 * @param float $preu Preu original.
 * @param int $percentatge Percentatge de descompte.
 * @return float Preu amb el descompte aplicat.
 */
function aplicaDescompte(float $preu, int $percentatge = 10): float
{
    return round($preu * (1 - $percentatge / 100), 2);
}

/**
 * Retorna una salutació personalitzada.
 *
 * @param string $nom Nom de la persona.
 * @param string $salutacio Salutació inicial.
 * @return string Missatge de benvinguda.
 */
function benvinguda(string $nom, string $salutacio = 'Hola'): string
{
    return "$salutacio $nom";
}

?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 4</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<?php

/* Exercici 1 */

echo "<h3>Exercici 1</h3>";

echo preuAmbIva(100) . "<br>";
echo preuAmbIva(100, 0.10) . "<br>";
echo preuAmbIva(100, 0.04) . "<br>";

/* Exercici 2 */

echo "<h3>Exercici 2</h3>";

echo aplicaDescompte(100) . "<br>";
echo aplicaDescompte(100, 25) . "<br>";

/* Exercici 3 */

echo "<h3>Exercici 3</h3>";

echo benvinguda("Ignacio") . "<br>";
echo benvinguda("Ignacio", "Bon dia") . "<br>";

/*
Si posem el paràmetre opcional primer:

function benvinguda(string $salutacio = 'Hola', string $nom): string

PHP dona un error perquè els paràmetres amb valor
per defecte han d'estar sempre al final de la llista
de paràmetres.
*/

?>

</body>
</html>