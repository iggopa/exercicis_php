<?php

/**
 * PAS 3 - Una sola página
 * Fins ara teníem dos fitxers, el formulari i el resultat
 * Mira com es fa la petició i així farà una cosa o altre
 * La primera visita és amb GET i quan es prem el botó d'enviar és amb POST
 */

 $nom = '';
 $correu = '';
 $dia = '';

 // var de control
 $enviat = false;

 // Array predefinido $_SERVER nos da información del servidor
 echo "<pre>";
 print_r($_SERVER);
 echo "</pre>";

?>