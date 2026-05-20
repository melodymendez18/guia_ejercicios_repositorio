<?php
$precio = $_POST['precio'];
$iva = $precio * 0.13;
$total = $precio + $iva;
echo "<h2>IVA: $ $iva</h2>";
echo "<h2>Total con IVA: $ $total</h2>";
echo "<br><a href='ej23.html'><button>Volver al formulario</button></a>";
?>
