<?php

$nota = 7.5;

if ($nota >= 9) {
  $qualif = 'Excel·lent';
} elseif ($nota >= 7) {
  $qualif = 'Notable';
} elseif ($nota >= 5) {
  $qualif = 'Aprovat';
} else {
  $qualif = 'Suspés';
}

$zona = "";

switch ($zona) {
  case 'local':
    $enviament = 0;
    break;
  case 'península':
    $enviament = 4.95;
    break;
  default:
    $enviament = 9.95;
}

$enviament = match ($zona) {
  'local' => 0,
  'península' => 4.95,
  default => 9.95,
};

for ($i = 1;$i <= 10;$i++) {
  echo $i;
};

$saldo = 10;
$objectiu = 100;
$anys = 19;

while ($saldo < $objectiu) {
  $saldo *= 1.03;
  $anys++;
}

do {
 $n = rand(1, 6);
} while ($n !== 6);

$estoc = 0;

$colors = ['vermell', 'verd', 'blau'];
echo $colors[0];
echo count($colors);
$colors[] = 'groc';
print_r($colors);

$producte = [
  'nom' => 'Teclat mecànic',
  'preu' => 79.90,
  'estoc' => 4,
];

echo $producte['nom'];
$producte ['preu'] = 69.90;

foreach ($colors as $color) {
  echo "<li>$color</li>";
}

foreach ($producte as $clau => $valor) {
  echo "<dt>$clau</dt>";
  echo "<dd>$valor</dd>";
}

$productes = [
  ['nom' => 'Teclat', 'preu' => 79.9],
  ['nom' => 'Ratolí', 'preu' => 24.5],
  ['nom' => 'Monitor', 'preu' => 189],
];

/*

count($a): Quants elements té
in_array($x, $a, true): Si un valor hi és (el true fa la comparació estricta)
array_key_exists('k', $a): Si una clau existeix
sort / rsort / ksort: Ordena per valor o per clau
array_sum / max / min: Suma, màxim i mínim
array_column($a, 'preu'): Treu una columna d'un array d'arrays
implode(', ', $a) / explode: Array a text i text a array

*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if ($estoc > 0) { ?>
  <p>En estoc</p>
  <?php } else { ?>
  <p>Esgotat</p>
  <?php } ?>

  <?php if ($estoc > 0): ?>
  <p>En estoc</p>
  <?php else: ?>
  <p>Esgotat</p>
  <?php endif; ?>

  <table>
    <?php for ($i = 1;$i <= 10;$i++): ?>
      <tr>
        <td><?= $i ?> x 7</td>
        <td><?= $i * 7 ?>
      </tr>
      <?php endfor; ?>
  </table>

  <?php foreach($productes as $p) : ?>
    <tr>
      <td><?= $p['nom'] ?></td>
      <td><?= $p['preu'] ?> EUR</td>
    </tr>
  <?php endforeach ?>
</body>
</html>