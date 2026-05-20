<?php
$monto = $_POST['monto'];
if ($monto > 100) {
  $descuento = $monto * 0.10;
  $total = $monto - $descuento;
  echo "<h2>Descuento: $ $descuento </h2>";
  echo "<h2>Total a pagar: $ $total</h2>";
} else {
  echo "<h2>Total a pagar: $ $monto</h2>";
}
echo "<br><a href='ej17.html'><button>Volver al formulario</button></a>";
?>
