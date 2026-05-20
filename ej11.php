<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$promedio = ($nota1 + $nota2 + $nota3) / 3;
if ($promedio >= 6) {
  echo "<h2>Estado: aprobado</h2>";
} else {
  echo "<h2>Estado: reprobado</h2>";
}
echo "<br><a href='ej11.html'><button>Volver al formulario</button></a>";
?>
