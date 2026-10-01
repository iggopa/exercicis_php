<?php

// Funciones con cadenas de texto (strings)

$cadena = "Hola";

$cadena[0] = "C";

echo "Ahora la cadena es: $cadena"; // Se cambia la H por la C

// strlen --> medir la longitud de la cadena

$cadena = "Aquesta cadena té moltes lletres";
$num_caracteres = strlen($cadena);

echo "El total de caràcters es: $num_caracteres";

// strpos --> retorna la casella on troba la subcadena dins la cadena pasada
// Sempre retorna la primera ocurrència1

$email = "hola@jviladoms.cat";
echo "Posició @: " . strpos($email, "@");

// strcmp --> string compare, compara dos cadenas
// si retorna 0 és igual
// si retorna <0 la primera cadena es más pequeña
// si retorna >0 la primera cadena es más grande

echo "Utilizamos strcmp: " . strcmp("Alejandra", "Pepe");

// substr --> retorna una subcadena de caràcters d'una cadena a partir d'una posició especificada fins al final o del tamany especificat.
// La cadena original no pateix cap modificació

$cadena = "PHP és un llenguatge fàcil";
echo "El substr de 0 a 3 és: " . substr($cadena, 0, 3);
echo "El substr de 21" . substr($cadena, 21);

// trim --> Elimina los espacios en blanco y saltos de línea que hay al principio y al final de una cadena
// ltrim --> Elimina los espacios en blanco que hay al principio de la cadena
// str_replace($antiga, $nova, $cadena)
// ereg_replace / eregi_replace()
// strtolower($cadena): pasa la cadena a minúsculas
// strtoupper($cadena): pasa la cadena a mayúsculas
// explode: permite dividir una cadena según un carácter o patrón

// Exercici 1: busca en php.net la función: str_word_count() y pon un ejemplo

// Exercici 2: busca en php.net la función: levenshtein() y pon un ejemplo

// Exercici 3: busca qué es el operador ternario y pon un ejemplo

// Exercici 4: Explicar qué hace esta función: function funcioMultipleReturns($v1, $v2, $v3)

?>