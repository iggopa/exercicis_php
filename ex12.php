<?php

declare(strict_types=1);

function peu(): void {
  echo '<footer>...</footer>';
}

peu();

function targeta(string $nom, float $preu, int $estoc): void {
  echo "<h3>$nom</h3><p>$preu EUR · $estoc unitats</p>";
}

targeta('Teclat mecanic', 79.90, 4);

function preuAmbIva(float $base, float $iva = 0.21): float {
  return round($base * (1 + $iva), 2);
}

preuAmbIva(100);
preuAmbIva(100, 0.10);

$botiga = 'BitBazar';

function mostra($nom): string {
  return 'Som a ' . $nom;
}

function compta(): int {
  $n = 0;
  $n++;
  return $n;
}

function compta2(): int {
  static $n = 0;
  $n++;
  return $n;
}

function valorEstoc(array $p): float {
  $total = 0.0;
  foreach ($p as $item) {
    $total += $item['preu'];
  }
  return $total;
}

function disponibles(array $p): array {
  $res = [];
  foreach ($p as $item) {
    if ($item['estoc'] > 0) $res[] = $item;
  }
  return $res;
}

?>