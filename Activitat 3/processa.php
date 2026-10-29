<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
  echo '<p>Has d\'arribar aqui des del formulari</p>';
  echo '<a href="registre.html">Torna-hi</a></p>';
  exit;
}

/*
$nom = trim($_POST['nom'] ?? '');
$naixement = trim($_POST['naixement'] ?? '');
$origen = $_POST['origen'] ?? 'No especificat';
$buttleti = isset($_POST['butlleti']) ? 'Si' : 'No';
$condicions = isset($_POST['condicions']) ? 'Si' : 'No';
*/

$usuari = [
  'nom' => trim($_POST['nom'] ?? ''),
  'cognoms' => trim($_POST['cognoms'] ?? ''),
  'naixement' => trim($_POST['naixement'] ?? ''),
  'telefon' => trim($_POST['telefon'] ?? ''),
  'correu' => trim($_POST['correu'] ?? ''),
  'correu2' => trim($_POST['correu2'] ?? ''),
  'user' => trim($_POST['user'] ?? ''),
  'carrer' => trim($_POST['carrer'] ?? ''),
  'poblacio' => trim($_POST['poblacio'] ?? ''),
  'codiPostal' => $_POST['codiPostal'] ?? '',
  'tipus' => $_POST['tipus'] ?? '',
  'origen' => $_POST['origen'] ?? 'No especificat',
  'butlleti' => isset($_POST['butlleti']) ? 'Si' : 'No',
  'condicions' => isset($_POST['condicions']) ? 'Si' : 'No',
];

echo $usuari['nom'];
echo count($usuari);

$clau = $_POST['clau'] ?? '';
$clau2 = $_POST['clau2'] ?? '';

$errors = [];

if ($usuari['nom'] === '') {
  $errors[] = 'El nom és obligatori';
}

if ($usuari['correu'] === '') {
  $errors[] = 'El correu és obligatori';
} elseif (filter_var($usuari['correu'], FILTER_VALIDATE_EMAIL) === false) {
  $errors[] = 'El correu no té format vàlid';
}

if (strlen($usuari['user']) < 4) {
  $errors[] = 'El nom d\'usuari té que tenir almenys 4 caracters';
}

if (strlen($clau) < 6) {
  $errors[] = 'La contrasenya té que tenir almenys 6 caracters';
}

if ($clau2 !== $clau) {
  $errors[] = 'Les dues contrasenyes tenen que ser iguals';
}

if (strlen($usuari['codiPostal']) >= 1 && strlen($usuari['codiPostal']) !== 5) {
  $errors[] = 'El codi postal té que tenir 5 caracters';
}

if ($usuari['tipus'] === '') {
  $errors[] = 'És obligatori escollir un tipus de client';
}

if (!isset($usuari['condicions'])) {
  $errors[] = 'Tens que acceptar les condicions per poder registrar-te';
}

if ($usuari['correu2'] !== $usuari['correu']) {
  $errors[] = 'Els correus electrònics tenen que ser iguals';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if(count($errors) > 0) : ?>
    <h2>No s'ha pogut crear el compte</h2>
    <ul>
      <?php foreach($errors as $error) : ?>
        <li><?= $error ?></li>
      <?php endforeach; ?>
    </ul>
  <?php else : ?>
    <table>
      <?php foreach($usuari as $camp => $valor) : ?>
        <tr>
          <th><?= $camp ?></th>
          <td><?= htmlspecialchars($valor) ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php endif; ?>
</body>
</html>