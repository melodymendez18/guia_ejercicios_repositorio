<?php
$nombre = $_POST['nombre'];
$horas = $_POST['horas'];
$pago_hora = $_POST['pago_hora'];
$salario = $horas * $pago_hora;
echo "<h2>Empleado:  $nombre </h2>";
echo "<h2>Salario total: $ $salario</h2>";
echo "<br><a href='ej16.html'><button>Volver al formulario</button></a>";
?>
