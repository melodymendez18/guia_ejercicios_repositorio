<?php
$numero = $_POST['numero'];
if ($numero % 2 == 0) {
  echo "<h2>El número " . $numero . " es par.</h2>";
} else {
  echo "<h2>El número " . $numero . " es impar.</h2>";
}
echo "<br><a href='ej09.html'><button>Volver al formulario</button></a>";
?>
