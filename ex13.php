<?php

/*
Con el include solamente da un warning si no encuentra el archivo pero no se frena la ejecución, mientras que con el require se para la ejecución.

config.php: require_once: Constants i valors fixos. Només una vegada
funcions.php: require_once: Si es declara dues vegades, error fatal.
capcalera.php: require: Sense disseny la pàgina no serveix
peu.php: require: Igual que la capcalera
un bloc opcional: include: un bàner, un avís... si falta, tant se val

archivos necesarios:
config.php: variables y configuraciones
funcions.php: todas las funciones propias juntas
capcalera.php: el encabezado de la página desde el DOC hasta el main
peu.php: el cierre de main, y html

NUNCA que el nombre de archivo sea una variable.
*/

?>