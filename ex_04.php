<?php
/********************************************************
 * Aquest fitxer té 6 errors: 3 de sintaxi (PHP no arrenca)
 * i 3 de lògica (funciona, però el resultat no és el correcte)
 * 
 * Arregla'ls d'un en un, comprovant la pàgina després de cada canvi.
 * Anota a errors-trobats.md quin era, com t'has adonat i com l'has resolt
 ********************************************************/

# nom = 'Aina'; Falta el $ per definir la variable
$nom = 'Aina';

# $assignatura = 'Desenvolupament web' Falta el ; al final per tancar la variable
$assignatura = 'Desenvolupament web';

$nota1 = 7;
$nota2 = 9;
# $mitjana = $nota1 + $nota2 / 2; L'operació està malament. Tenim que posar la suma dins de parèntesis
$mitjana = ($nota1 + $nota2) / 2;

echo '<h1>Buttletí de notes</h1>';
# echo '<p>Alumna :$nom</p>'; No es pot posar a la mateixa cadena de text un element HTML i PHP si té cometes simples ''
echo '<p>Alumna: ' . $nom . '</p>';
# echo '<p>Assignatura: ' + $assignatura + '</p>'; No es pot concatenar elements dins d'una cadena de text amb un +, té que ser amb un .
echo '<p>Assignatura: ' . $assignatura . '</p>';
# echo "<p>Mitjana: $mijtana</p>; No es tanca l'etiqueta de text i no es detecta correctament el ;
echo "<p>Mitjana: $mitjana</p>";

echo '<p>Generat el ' . date('d/m/Y') . '</p>';