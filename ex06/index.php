<?php

# const IVA = "Hola"; Esta es la constante cambiada.
# En este caso el valor de la constante IVA era de 0.21, ya que representa un porcentaje de un precio, pero al cambiarlo a una string
# da error ya que esta constante es utilizada para poder calcular precios durante el proceso de la página. Por eso da error.
const IVA = 0.21;
const BOTIGA = "Tienda online guay";
const MONEDA = "EUR";
const DESCOMPTE_SOCI = 0.1;
const TITLE = "Tienda online guay";
const DESCRIPCIO_BOTIGA = "Esto es una tienda online guay";

$nom = "Camiseta GUAY";
$subtotal = 99.99;
$iva = $subtotal * IVA;
$total = $subtotal + $iva;
$descripcio = "Camiseta chupi chupi";
$estoc = 5;
$ref = "CAM-1425376";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php echo "<title>" . TITLE . "</title>" ?>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <?php echo "<h1>" . TITLE . "</h1>" ?>
    <?php echo "<p>" . DESCRIPCIO_BOTIGA . "</p>" ?>
  </header>
  <main>
    <article class="producte">
      <?php echo "<h2>$nom</h2>" ?>
      <?php echo "<p class=\"descripcio\">$descripcio</p>" ?>
      <?php echo "<p class=\"preu\">Preu sense IVA: $subtotal " . MONEDA . "</p>" ?>
      <?php echo "<p class=\"preu\">IVA (21%): $iva " . MONEDA . "</p>" ?>
      <?php echo "<p class=\"total\">TOTAL: $total " . MONEDA . "</p>" ?>
      <?php echo "<p class=\"estoc\">Unitats disponibles: $estoc</p>" ?>
      <?php echo "<p class=\"ref\">$ref</p>" ?>
    </article>
  </main>
  <footer>
    <p>Footer de la tienda chupi guay S.L</p>
  </footer>
</body>
</html>