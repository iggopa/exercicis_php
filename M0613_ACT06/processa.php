<?php

require_once 'config.php';
require_once 'funcions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    $titolPagina = 'Accés directe';

    require_once 'header.php';

    echo '<h2>Aquí no s\'hi arriba directament</h2>';
    echo '<a href="' . PAG_FORMULARI . '">Anar al formulari</a>';

    require_once 'footer.php';

    exit;
}

$usuari = [
    'nom' => camp('nom'),
    'cognoms' => camp('cognoms'),
    'naixement' => camp('naixement'),
    'telefon' => camp('telefon'),
    'correu' => camp('correu'),
    'correu2' => camp('correu2'),
    'user' => camp('user'),
    'carrer' => camp('carrer'),
    'poblacio' => camp('poblacio'),
    'codiPostal' => camp('codiPostal'),
    'tipus' => camp('tipus'),
    'origen' => camp('origen', 'No especificat'),
    'butlleti' => isset($_POST['butlleti']) ? 'Si' : 'No',
    'condicions' => isset($_POST['condicions']) ? 'Si' : 'No',
];

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

if (strlen($usuari['user']) < MIN_USUARI) {
    $errors[] = 'El nom d\'usuari té que tenir almenys ' . MIN_USUARI . ' caracters';
}

if (strlen($clau) < MIN_CLAU) {
    $errors[] = 'La contrasenya té que tenir almenys ' . MIN_CLAU . ' caracters';
}

if ($clau2 !== $clau) {
    $errors[] = 'Les dues contrasenyes tenen que ser iguals';
}

if (
    strlen($usuari['codiPostal']) >= 1 &&
    strlen($usuari['codiPostal']) !== 5
) {
    $errors[] = 'El codi postal té que tenir 5 caracters';
}

if ($usuari['tipus'] === '') {
    $errors[] = 'És obligatori escollir un tipus de client';
}

if ($usuari['condicions'] !== 'Si') {
    $errors[] = 'Tens que acceptar les condicions per poder registrar-te';
}

if ($usuari['correu2'] !== $usuari['correu']) {
    $errors[] = 'Els correus electrònics tenen que ser iguals';
}

$titolPagina = count($errors) > 0
    ? 'No s\'ha creat el compte'
    : 'Compte creat';

require_once 'header.php';

?>

<?php if (count($errors) > 0) : ?>

    <h2>No s'ha pogut crear el compte</h2>

    <ul>
        <?php foreach ($errors as $error) : ?>
            <li><?= htmlspecialchars($error) ?></li>
        <?php endforeach; ?>
    </ul>

    <p>
        <a href="<?= PAG_FORMULARI ?>">Torna al formulari</a>
    </p>

<?php else : ?>

    <h2>Compte creat correctament</h2>

    <table>
        <?php foreach ($usuari as $camp => $valor) : ?>
            <tr>
                <th><?= etiqueta($camp) ?></th>
                <td><?= htmlspecialchars($valor) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <p><a href="gracies.php">Continuar</a></p>

<?php endif; ?>

<?php require_once 'footer.php'; ?>