<?php
$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$subtotal = $cantidad * $precio;
$iva = $subtotal * 0.13;
$total = $subtotal + $iva;
echo "<h2> FACTURA </h2>";
echo "<p>Cliente:  $cliente </p>";
echo "<p>Producto:  $producto </p>";
echo "<p>Cantidad:  $cantidad </p>";
echo "<p>Precio unitario: $ $precio</p>";
echo "<p>Subtotal: $ $subtotal</p>";
echo "<p>IVA: $ $iva</p>";
echo "<h3>Total a pagar: $ $total</h3>";
echo "<br><a href='ej18.html'><button>Volver al formulario</button></a>";
?>
