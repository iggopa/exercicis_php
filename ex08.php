<?php

$estudiants = [
  ['nom' => 'Ignacio', 'curs' => 'DAW2', 'edat' => 19, 'nota mitjana' => 8],
  ['nom' => 'Álvaro', 'curs' => 'DAW2', 'edat' => 21, 'nota mitjana' => 7],
  ['nom' => 'Jesús', 'curs' => 'DAW2', 'edat' => 18, 'nota mitjana' => 9],
  ['nom' => 'Marcos', 'curs' => 'DAW2', 'edat' => 23, 'nota mitjana' => 7.5],
  ['nom' => 'Lucía', 'curs' => 'DAW2', 'edat' => 24, 'nota mitjana' => 6],
  ['nom' => 'Julían', 'curs' => 'DAW2', 'edat' => 20, 'nota mitjana' => 7],
  ['nom' => 'Álex', 'curs' => 'DAW2', 'edat' => 22, 'nota mitjana' => 8],
  ['nom' => 'Martín', 'curs' => 'DAW2', 'edat' => 23, 'nota mitjana' => 6],
  ['nom' => 'Borja', 'curs' => 'DAW2', 'edat' => 28, 'nota mitjana' => 9],
  ['nom' => 'Arnau', 'curs' => 'DAW2', 'edat' => 19, 'nota mitjana' => 8],
];

echo count($estudiants);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alumnos</title>
</head>
<body>
  <table>
    <thead>
      <th>Nom</th>
      <th>Curs</th>
      <th>Edat</th>
      <th>Nota Mitjana</th>
    </thead>
    <tbody>
      <?php foreach($estudiants as $estudiant) : ?>
      <tr>
        <td><?= $estudiant['nom'] ?></td>
        <td><?= $estudiant['curs'] ?></td>
        <td><?= $estudiant['edat']?></td>
        <td><?= $estudiant['nota mitjana'] ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>