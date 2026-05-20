<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$promedio = ($nota1 + $nota2 + $nota3) / 3;
echo "<h2>Promedio: $promedio </h2>";
echo "<br><a href='ej10.html'><button>Volver al formulario</button></a>";
?>
