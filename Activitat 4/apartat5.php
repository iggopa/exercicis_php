<?php
declare(strict_types=1);

/**
 * Calcula l'àrea d'un rectangle.
 *
 * @param float $base Base del rectangle.
 * @param float $altura Altura del rectangle.
 * @return float Àrea calculada.
 */
function area(float $base, float $altura): float
{
    return $base * $altura;
}

/**
 * Comprova si un producte està esgotat.
 *
 * @param int $unitats Unitats disponibles.
 * @return bool Retorna true si no hi ha estoc i false en cas contrari.
 */
function esgotat(int $unitats): bool
{
    return $unitats === 0;
}

?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 5</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<?php

echo "<h3>Àrees</h3>";

// Amb decimals
echo area(3.0, 4.0) . "<br>";

// Amb enters
echo area(3, 4) . "<br>";

echo "<h3>Error de tipus</h3>";

try {
    echo area('3', 4.0);
} catch (TypeError $e) {
    echo "Error de tipus: " . $e->getMessage() . "<br>";
}

echo "<h3>Conversió correcta</h3>";

echo area((float)'3', 4.0) . "<br>";

echo "<h3>Estoc</h3>";

var_dump(esgotat(0));
echo "<br>";
var_dump(esgotat(5));

/*
És millor que PHP avisi dels errors de tipus perquè
ens ajuda a detectar problemes abans. Si PHP converteix
automàticament els valors, un error pot passar
desapercebut i produir resultats incorrectes.

Amb strict_types=1 el programador controla les
conversions de forma explícita i el codi és més segur.
*/

?>

</body>
</html>