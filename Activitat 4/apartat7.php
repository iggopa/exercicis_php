<?php
declare(strict_types=1);

$productes = [
    [
        'nom' => 'Teclat mecànic RGB',
        'preu' => 79.90,
        'estoc' => 4,
        'categoria' => 'teclats'
    ],
    [
        'nom' => 'Ratolí vertical',
        'preu' => 29.95,
        'estoc' => 7,
        'categoria' => 'ratolins'
    ],
    [
        'nom' => 'Monitor 27" QHD',
        'preu' => 289.00,
        'estoc' => 0,
        'categoria' => 'monitors'
    ],
    [
        'nom' => 'Auriculars ANC',
        'preu' => 129.00,
        'estoc' => 2,
        'categoria' => 'audio'
    ],
    [
        'nom' => 'Hub USB-C 7 en 1',
        'preu' => 34.90,
        'estoc' => 20,
        'categoria' => 'accessoris'
    ],
    [
        'nom' => 'Suport per a portàtil',
        'preu' => 24.50,
        'estoc' => 0,
        'categoria' => 'accessoris'
    ]
];

/**
 * Calcula el valor total de l'estoc.
 *
 * @param array $productes Catàleg de productes.
 * @return float Valor total de l'estoc.
 */
function valorEstoc(array $productes): float
{
    $total = 0;

    foreach ($productes as $item) {
        $total += $item['preu'] * $item['estoc'];
    }

    return round($total, 2);
}

/**
 * Compta quants productes estan esgotats.
 *
 * @param array $productes Catàleg de productes.
 * @return int Nombre de productes esgotats.
 */
function quantsEsgotats(array $productes): int
{
    $comptador = 0;

    foreach ($productes as $item) {
        if ($item['estoc'] === 0) {
            $comptador++;
        }
    }

    return $comptador;
}

/**
 * Calcula el preu mitjà dels productes.
 *
 * @param array $productes Catàleg de productes.
 * @return float Preu mitjà.
 */
function preuMitja(array $productes): float
{
    if (count($productes) === 0) {
        return 0;
    }

    $suma = 0;

    foreach ($productes as $item) {
        $suma += $item['preu'];
    }

    return round($suma / count($productes), 2);
}

/**
 * Obté els noms dels productes disponibles.
 *
 * @param array $productes Catàleg de productes.
 * @return array Llista de noms disponibles.
 */
function nomsDisponibles(array $productes): array
{
    $noms = [];

    foreach ($productes as $item) {
        if ($item['estoc'] > 0) {
            $noms[] = $item['nom'];
        }
    }

    return $noms;
}

/**
 * Obté el producte més car del catàleg.
 *
 * @param array $productes Catàleg de productes.
 * @return array Dades del producte més car.
 */
function elMesCar(array $productes): array
{
    $mesCar = $productes[0];

    foreach ($productes as $item) {
        if ($item['preu'] > $mesCar['preu']) {
            $mesCar = $item;
        }
    }

    return $mesCar;
}

/**
 * Genera un resum del catàleg.
 *
 * @param array $productes Catàleg de productes.
 * @return array Resum amb estadístiques del catàleg.
 */
function resumCataleg(array $productes): array
{
    return [
        'total' => valorEstoc($productes),
        'disponibles' => count(nomsDisponibles($productes)),
        'mes_car' => elMesCar($productes)['nom']
    ];
}

?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 7</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<?php

echo "<h3>Exercici 1</h3>";

echo "Valor total de l'estoc: " . valorEstoc($productes) . " €<br>";
echo "Productes esgotats: " . quantsEsgotats($productes) . "<br>";
echo "Preu mitjà: " . preuMitja($productes) . " €<br>";

echo "<h3>Noms disponibles</h3>";

foreach (nomsDisponibles($productes) as $nom) {
    echo $nom . "<br>";
}

echo "<h3>Producte més car</h3>";

$mesCar = elMesCar($productes);

echo $mesCar['nom'] . " - " . $mesCar['preu'] . " €<br>";

echo "<h3>Resum del catàleg</h3>";

$resum = resumCataleg($productes);

foreach ($resum as $clau => $valor) {
    echo "$clau : $valor <br>";
}

?>

</body>
</html>