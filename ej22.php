<?php
$dolares = $_POST['dolares'];
$tasa = 0.92;
$euros = $dolares * $tasa;
echo "<h2>La cantidad es de € $euros EUR</h2>";
echo "<br><a href='ej22.html'><button>Volver al formulario</button></a>";
?>
