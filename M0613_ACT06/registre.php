<?php

require_once 'config.php';

$titolPagina = 'Crea el teu compte';

require_once 'header.php';

?>

<h2>Crea el teu compte</h2>

<form action="processa.php" method="post">
    <fieldset>
        <legend>Dades personals</legend>

        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">

        <label for="cognoms">Cognom</label>
        <input type="text" id="cognoms" name="cognoms">

        <label for="naixement">Data de naixement</label>
        <input type="date" id="naixement" name="naixement">

        <label for="telefon">Telefon</label>
        <input type="tel" id="telefon" name="telefon">

        <label for="correu">Correu electrònic</label>
        <input type="email" id="correu" name="correu">

        <label for="correu2">Confirma correu electrònic</label>
        <input type="email" id="correu2" name="correu2">

        <label for="user">Nom d'usuari</label>
        <input type="text" id="user" name="user">

        <label for="clau">Contrasenya</label>
        <input type="password" id="clau" name="clau">

        <label for="clau2">Repetir contrasenya</label>
        <input type="password" id="clau2" name="clau2">

        <label for="carrer">Carrer i número</label>
        <input type="text" id="carrer" name="carrer">

        <label for="poblacio">Població</label>
        <input type="text" id="poblacio" name="poblacio">

        <label for="codiPostal">Codi postal</label>
        <input type="number" id="codiPostal" name="codiPostal">
    </fieldset>

    <p class="grup">Què tipus d'usuari ets?</p>

    <div class="select-container">
        <select id="tipus" name="tipus">
            <option value="">-- Selecciona un tipus de client --</option>
            <option value="estudiant">Estudiant</option>
            <option value="professor">Professor</option>
            <option value="desenvolupador">Desenvolupador</option>
        </select>
    </div>

    <p class="grup">Com ens has conegut?</p>

    <label class="linia">
        <input type="radio" name="origen" value="xarxes"> Xarxes socials
    </label>

    <label class="linia">
        <input type="radio" name="origen" value="amics"> Un amic o amiga
    </label>

    <label class="linia">
        <input type="checkbox" name="butlleti" value="si"> Vull rebre ofertes
    </label>

    <label class="linia">
        <input type="checkbox" name="condicions" value="si"> Accepto les condicions
    </label>

    <button type="submit">Crear el compte</button>
</form>

<?php
require_once 'footer.php';