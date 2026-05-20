<?php
$celsius = $_POST['celsius'];
$fahrenheit = ($celsius * 9 / 5) + 32;
echo "<h2>La cantidad en Fahrenheit = $fahrenheit °F</h2>";
echo "<br><a href='ej15.html'><button>Volver al formulario</button></a>";
?>
