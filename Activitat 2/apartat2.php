<?php

$grups = [];
$grups[0] = "The Weeknd";
$grups[1] = "Travis Scott";
$grups[2] = "Don Toliver";
$grups[3] = "Kendrick Lamar";
$grups[4] = "Yeat";
$grups[] = "Kanye West";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<ul>
    <?php foreach($grups as $grup): ?>
      <li><?= $grup ?></li>
    <?php endforeach; ?>
  </ul>
  <hr>
  <ul>
    <?php foreach($grups as $posicio => $grup): ?>
      <li><?= $posicio ?> - <?= $grup ?></li>
    <?php endforeach; ?>
  </ul>
  <hr>
</body>
</html>

<?php

$estils = [
  "The Weeknd" => "Pop",
  "Travis Scott" => "Trap",
  "Don Toliver" => "Trap",
  "Kendrick Lamar" => "Rap",
  "Yeat" => "Hip Hop",
  "Kanye West" => "Rap"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table>
    <tr>
      <th>Grup</th>
      <th>Estil</th>
    </tr>
      <?php foreach ($estils as $grup => $estil): ?>
      <tr>
        <td><?= $grup ?></td>
        <td><?= $estil ?></td>
      </tr>
      <?php endforeach; ?>
    <tr>
      <td>Total de grups</td>
      <td><?= count($estils) ?></td>
    </tr>
  </table>
  <hr>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table>
    <tr>
      <th>Grup</th>
      <th>Estil</th>
    </tr>
    <?php
    reset($estils);
    if (key($estils) !== null):  
      do {
        $grup = key($estils);
        $estil = current($estils);
    ?>
      <tr>
        <td><?= $grup ?></td>
        <td><?= $estil ?></td>
      </tr>
    <?php
      } while (next($estils) !== false);
    endif;
    ?>
    <tr>
      <td>Total de grups</td>
      <td><?= count($estils) ?></td> <!-- El mètode amb foreach és més clar perquè és més curt, més llegible i evita haver de controlar manualment el punter intern de l'array -->
    </tr>
  </table>
  <hr>
</body>
</html>

<?php

function recorrerInvers(array $llista) {
  end($llista);
  do {
    $clau = key($llista);
    $valor = current($llista);
    echo $clau . " => " . $valor . "<br>";
  } while (prev($llista) !== false);
}

recorrerInvers($estils);

echo "<hr>";

foreach ($estils as $grup => $estil) {
  echo $grup . " => " . $estil . "<br>";
}

?>