<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$ciudad = $_POST['ciudad'];
echo "<h2>Información del Usuario</h2>";
echo "<p>Nombre: $nombre</p>";
echo "<p>Correo electrónico: $correo</p>";
echo "<p>Ciudad: $ciudad</p>";
echo "<br><a href='ej25.html'><button>Volver al formulario</button></a>";
?>
