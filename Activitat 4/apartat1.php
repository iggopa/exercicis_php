<?php
declare(strict_types=1);

/**
 * Mostra la capçalera de la pàgina.
 *
 * @return void
 */
function capcalera(): void
{
    echo '<header>
            <h1>BitBazar</h1>
            <h2>La teva botiga de confiança</h2>
          </header>';
}

/**
 * Mostra el peu de pàgina.
 *
 * @return void
 */
function peu(): void
{
    echo '<footer>BitBazar - ' . date('Y') . '</footer>';
}

/**
 * Funció creada però no executada.
 *
 * @return void
 */
function funcioNoCridada(): void
{
    echo 'Aquesta funció no es crida';
}

?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 1</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

<?php

capcalera();

echo '<main>';
echo '<p>Contingut de la pàgina.</p>';
echo '</main>';

peu();
peu();
peu();

/*
La funció funcioNoCridada() no s'executa perquè
només definir una funció no la fa funcionar.
Cal cridar-la explícitament pel seu nom.
*/

?>

</body>
</html>