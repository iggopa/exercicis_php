<?php

$grups = [
  "Queen",
  "Coldplay",
  "Black Sabbath",
  "AC/DC",
  "Metallica"
];

$grup1 = "The Weeknd";
$grup2 = "Queen";

if (in_array($grup1, $grups)) {
  echo "$grup1 sí que és al cartell <br>";
} else {
  echo "$grup1 no és al cartell <br>";
}

if (in_array($grup2, $grups)) {
  echo "$grup2 sí que és al cartell <br>";
} else {
  echo "$grup2 no és al cartell <br>";
}

function buscaGrup(array $llista, string $grup) {
  for ($i = 0;$i < count($llista);$i++) {
    if ($llista[$i] === $grup) {
      return $i;
    } 
  }
  return -1;
}

echo "Posició de Queen: " . buscaGrup($grups, "Queen") . "<br>";
echo "Posició de The Weeknd" . buscaGrup($grups, "The Weeknd") . "<br>";

?>

<?php

$array1 = [
  "Queen" => 1,
  "Coldplay" => 2,
  "Black Sabbath" => 3,
  "AC/DC" => 4,
  "Metallica" => 5
];

$array2 = [
  "Queen" => 1,
  "Coldplay" => 2,
  "Black Sabbath" => 3,
  "AC/DC" => 4,
  "Metallica" => 5
];

$array3 = [
  "Queen" => 1,
  "Coldplay" => 2,
  "Black Sabbath" => 3,
  "AC/DC" => 4,
  "Metallica" => 5
];

$array4 = [
  "Queen" => 1,
  "Coldplay" => 2,
  "Black Sabbath" => 3,
  "AC/DC" => 4,
  "Metallica" => 5
];

asort($array1); // ordena per valor
arsort($array2);
ksort($array3); // ordena per clave
krsort($array4);

echo "<h3>asort</h3>";
print_r($array1);
echo "<br>";
echo "<h3>asrort</h3>";
print_r($array2);
echo "<br>";
echo "<h3>ksort</h3>";
print_r($array3);
echo "<br>";
echo "<h3>krsort</h3>";
print_r($array4);
echo "<br>";

shuffle($array1);
print_r($array1);

// El que fa la funció shuffle() és reodenar els valors, esborrant les claus, i converteix l'array a numèric

$grups = [
  "Queen",
  "Coldplay",
  "Black Sabbath",
  "AC/DC",
  "Metallica"
];

shuffle($grups);

echo "<ol>";
foreach ($grups as $grup) {
  echo "<li>$grup</li>";
}
echo "</ol>";

?>