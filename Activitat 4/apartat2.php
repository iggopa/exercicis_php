<?php
declare(strict_types=1);

/**
 * Mostra un missatge de benvinguda.
 *
 * @param string $nom Nom de la persona.
 * @return void
 */
function saluda(string $nom): void
{
    echo "<p>Benvingut/da, $nom!</p>";
}

/**
 * Mostra la fitxa d'un producte.
 *
 * @param string $nom Nom del producte.
 * @param float $preu Preu del producte.
 * @param int $estoc Unitats disponibles.
 * @return void
 */
function targeta(string $nom, float $preu, int $estoc): void
{
    echo '<div class="targeta">';
    echo "<h3>$nom</h3>";
    echo "<p>Preu: " . number_format($preu, 2, ',', '.') . " €</p>";
    echo "<p>Estoc: $estoc unitats</p>";
    echo '</div>';
}

?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 2</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<?php

/* Exercici 1 */
saluda("Ignacio");
saluda("Marta");
saluda("Joan");

/* Exercici 2 */
echo '<div class="graella">';

targeta("Teclat mecànic", 79.90, 4);
targeta("Ratolí gaming", 39.95, 12);
targeta("Monitor 24 polzades", 199.99, 7);

echo '</div>';

/* Exercici 3 */

/*
targeta(79.90, "Teclat mecànic", 4);

Això produeix un error perquè els arguments
s'han de passar en el mateix ordre que els
paràmetres definits a la funció:
(string, float, int).

En passar primer un float en lloc d'un string,
PHP amb strict_types=1 genera un TypeError.
*/

?>

</body>
</html>