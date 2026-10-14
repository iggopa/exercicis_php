<?php

$grups = [];
$grups[0] = "Queen";
$grups[1] = "Coldplay";
$grups[2] = "Metallica";
$grups[8] = "AC/DC";
$grups[] = "Black Sabbath";

$estils = array();
$edicions = range(2019, 2026);

$string = "Hola, cómo vas";
$paraules = explode(",", $string);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>Array 1: <?= print_r($grups) ?></pre><br>
  <pre>Array 2: <?= print_r($estils) ?></pre><br>
  <pre>Array 3: <?= print_r($edicions) ?></pre><br>
  <pre>Array 4: <?= print_r($paraules) ?></pre>

  <pre>print_r: <?php print_r($grups); ?></pre> <!-- print_r() mostra l'array de forma comú, amb el següent format: [] => "" -->
  <pre>var_dump: <?php var_dump($grups); ?></pre> <!-- var_dump() mostra tota la informació de l'array, mostra la ruta, la mida de l'array,
  la línia a la que es mostra l'array, el tipus dels elements que el componen, la seva posició y la mida de tots els elements per separat -->
  <pre>var_export: <?php var_export($grups); ?></pre> <!-- var_export() mostra l'array amb un format similar a print_r(), però sense el [],
  i diferenciant les dades, per exemple les strings amb '' i la resta de dades sense cometes.-->
</body>
</html>

<?php

$estils = array($grups[0] => "Rock", $grups[1] => "Pop");
$estils[$grups[2]] = "Metal";
$estils[$grups[8]] = "Hard rock";

echo $estils[$grups[8]];

$estils["The Weeknd"] = "Pop";
print_r($estils);

echo count($grups);

?>

<?php

$grups = [];
$grups[0] = "The Weeknd";
$grups[1] = "Travis Scott";
$grups[2] = "Don Toliver";
$grups[3] = "Kendrick Lamar";
$grups[4] = "Yeat";
echo count($grups);

echo "<hr>";

unset($grups[2]);
print_r($grups);
echo count($grups);

echo "<hr>";

$grups[] = "Kanye West";
print_r($grups);

// Després d'un unset() l'array queda amb espaïs buits als index, i un for que recorre des de 0 fins a count() - 1, pot donar error perquè
// intenta accedir a posicions que ja no existeixen.

?>