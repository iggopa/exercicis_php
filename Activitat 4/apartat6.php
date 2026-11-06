<?php
declare(strict_types=1);

/* Exercici 1 */

// Variable global
$botiga = "BitBazar";

/**
 * Intenta accedir a una variable global sense rebre-la com a paràmetre.
 *
 * @return string Missatge amb el nom de la botiga.
 */
function mostraBotigaMalament(): string
{
    return "Som a " . $botiga;
}

?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 6</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<?php

try {
    echo mostraBotigaMalament();
} catch (Error $e) {
    echo $e->getMessage();
}

/*
Warning/Error:
Undefined variable $botiga
La funció no veu les variables creades fora d'ella.
*/

/**
 * Mostra el nom de la botiga rebut per paràmetre.
 *
 * @param string $nom Nom de la botiga.
 * @return string Missatge amb el nom de la botiga.
 */
function mostraBotiga(string $nom): string
{
    return "Som a $nom";
}

echo "<br>";
echo mostraBotiga("BitBazar");

/* Exercici 2 */

/**
 * Compta utilitzant una variable local.
 *
 * @return int Valor del comptador.
 */
function comptaLocal(): int
{
    $n = 0;
    $n++;

    return $n;
}

/**
 * Compta utilitzant una variable estàtica.
 *
 * @return int Valor acumulat del comptador.
 */
function comptaStatic(): int
{
    static $n = 0;
    $n++;

    return $n;
}

echo "<h3>comptaLocal()</h3>";
echo comptaLocal() . "<br>";
echo comptaLocal() . "<br>";
echo comptaLocal() . "<br>";

echo "<h3>comptaStatic()</h3>";
echo comptaStatic() . "<br>";
echo comptaStatic() . "<br>";
echo comptaStatic() . "<br>";

/*
comptaLocal() mostra:
1
1
1

Perquè la variable es crea de nou a cada crida.

comptaStatic() mostra:
1
2
3

Perquè una variable static conserva el seu valor
entre crides a la funció.
*/

?>

</body>
</html>