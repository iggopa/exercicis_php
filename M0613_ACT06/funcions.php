<?php

/**
 * Recull un camp del formulari ja net d'espais.
 *
 * @param string $camp Nom del camp a l'atribut name del formulari
 * @param string $defecte Valor si el camp no ha arribat
 * @return string Valor net
 */
function camp(string $camp, string $defecte = ''): string
{
    return trim($_POST[$camp] ?? $defecte);
}

/**
 * Converteix la clau de l'array en una etiqueta llegible.
 *
 * @param string $clau Clau de l'array
 * @return string Text llegible
 */
function etiqueta(string $clau): string
{
    $noms = [
        'nom' => 'Nom',
        'cognoms' => 'Cognoms',
        'naixement' => 'Data de naixement',
        'telefon' => 'Telèfon',
        'correu' => 'Correu electrònic',
        'correu2' => 'Confirmació correu electrònic',
        'user' => 'Nom d\'usuari',
        'carrer' => 'Carrer i número',
        'poblacio' => 'Població',
        'codiPostal' => 'Codi postal',
        'tipus' => 'Tipus de client',
        'origen' => 'Com ens has conegut',
        'butlleti' => 'Butlletí',
        'condicions' => 'Condicions'
    ];

    return $noms[$clau] ?? ucfirst($clau);
}