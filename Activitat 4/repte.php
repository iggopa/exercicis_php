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
 * Calcula el preu amb IVA.
 *
 * @param float $base Preu base del producte.
 * @param float $iva Percentatge d'IVA.
 * @return float Preu final amb IVA.
 */
function preuAmbIva(float $base, float $iva = 0.21): float
{
    return round($base * (1 + $iva), 2);
}

/**
 * Formata un preu.
 *
 * @param float $preu Preu a formatar.
 * @return string Preu formatat.
 */
function formatPreu(float $preu): string
{
    return number_format($preu, 2, ',', '.') . ' EUR';
}

/**
 * Retorna l'estat de l'estoc.
 *
 * @param int $unitats Unitats disponibles.
 * @return string Estat del producte.
 */
function estatEstoc(int $unitats): string
{
    if ($unitats === 0) {
        return 'Esgotat';
    }

    if ($unitats <= 3) {
        return 'Últimes unitats';
    }

    return 'Disponible';
}

/**
 * Filtra els productes per categoria.
 *
 * @param array $productes Catàleg de productes.
 * @param string $categoria Categoria a filtrar.
 * @return array Productes trobats.
 */
function filtraCategoria(array $productes, string $categoria): array
{
    if ($categoria === 'totes') {
        return $productes;
    }

    $resultat = [];

    foreach ($productes as $producte) {
        if ($producte['categoria'] === $categoria) {
            $resultat[] = $producte;
        }
    }

    return $resultat;
}

/**
 * Genera un resum del catàleg.
 *
 * @param array $productes Catàleg de productes.
 * @return array Resum amb estadístiques.
 */
function resumCataleg(array $productes): array
{
    $valorEstoc = 0;
    $disponibles = 0;
    $esgotats = 0;

    foreach ($productes as $producte) {
        $valorEstoc += $producte['preu'] * $producte['estoc'];

        if ($producte['estoc'] === 0) {
            $esgotats++;
        } else {
            $disponibles++;
        }
    }

    return [
        'total' => count($productes),
        'disponibles' => $disponibles,
        'esgotats' => $esgotats,
        'valor_estoc' => round($valorEstoc, 2)
    ];
}

/**
 * Mostra una targeta de producte.
 *
 * @param array $producte Dades del producte.
 * @return void
 */
function pintaTargeta(array $producte): void
{
    echo '<div class="targeta">';

    echo '<h3>' . $producte['nom'] . '</h3>';

    echo '<p>Categoria: ' . $producte['categoria'] . '</p>';

    echo '<p>Preu sense IVA: '
        . formatPreu($producte['preu'])
        . '</p>';

    echo '<p>Preu amb IVA: '
        . formatPreu(preuAmbIva($producte['preu']))
        . '</p>';

    echo '<p>Estat: '
        . estatEstoc($producte['estoc'])
        . '</p>';

    echo '</div>';
}

/**
 * Mostra una graella de productes.
 *
 * @param array $productes Productes a mostrar.
 * @return void
 */
function pintaGraella(array $productes): void
{
    if (count($productes) === 0) {
        echo '<p>No hi ha productes en aquesta categoria.</p>';
        return;
    }

    echo '<div class="graella">';

    foreach ($productes as $producte) {
        pintaTargeta($producte);
    }

    echo '</div>';
}

?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Repte Final</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<?php

$resum = resumCataleg($productes);

echo '<h1>BitBazar</h1>';

echo '<h2>Resum del catàleg</h2>';

foreach ($resum as $clau => $valor) {
    echo '<p>' . $clau . ': ' . $valor . '</p>';
}

echo '<h2>Tots els productes</h2>';
pintaGraella($productes);

echo '<h2>Categoria accessoris</h2>';
pintaGraella(filtraCategoria($productes, 'accessoris'));

echo '<h2>Categoria consoles</h2>';
pintaGraella(filtraCategoria($productes, 'consoles'));

?>

</body>
</html>