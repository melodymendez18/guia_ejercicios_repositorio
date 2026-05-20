<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
if ($num1 > $num2) {
  echo "<h2>El número mayor es: $num1</h2>";
} else ($num2 > $num1) {
  echo "<h2>El número mayor es: $num2</h2>";
}
echo "<br><a href='ej07.html'><button>Volver al formulario</button></a>";
?>
