<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Algoritmos</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
	<header class="banner">
		<h1 class="banner-title" align="center">Algoritmos en PHP</h1>
	</header>

	<nav class="menu">
		<ul>
			<li><a href="index.html">Volver a inicio</a>
				<ul class="submenu">
				</ul>
			</li>

			<li><a href="index.php">Algoritmos secuenciales</a>
				<ul class="submenu">
					<li><a href="promedio.php">Promedio</a></li>
					<li><a href="triangulo.php">Área triángulo</a></li>
					<li><a href="iva.php">Iva</a></li>
					<li><a href="MRU.php">M.R.U.</a></li>
					<li><a href="MRUA.php">M.R.U.A.</a></li>
					<li><a href="esfera.php">Esfera</a></li>
					<li><a href="salario.php">Salario</a></li>
					<li><a href="ecuaciones.php">Ecuaciones</a></li>
					<li><a href="curso.php">Curso</a></li>
					<li><a href="nota.php">Nota</a></li>
					<li><a href="luz.php">Factura</a></li>
					<li><a href="caida.php">Altura</a></li>
				</ul>
			</li>

			<li><a href="#">Algoritmos condicionales</a>
				<ul class="submenu">
					<li><a href="cuadratica.php">Formula General</a></li>
					<li><a href="llantas.php">Precio llantas</a></li>
					<li><a href="descuento.php">Descuento promoción</a></li>
					<li><a href="pulsaciones.php">Pulsaciones</a></li>
					<li><a href="cuota.php">Cuota</a></li>
					<li><a href="matricula.php">Matrícula</a></li>
					<li><a href="pago.php">Pago Casa</a></li>
					<li><a href="sar.php">Pago al SAR</a></li>
					<li><a href="salari0.php">Salario</a></li>
					<li><a href="venta.php">Descuento Venta</a></li>
					<li><a href="compra.php">Compra Artículo</a></li>
				</ul>
			</li>

			<li><a href="bucle.php">Bucles</a>
				<ul class="submenu">
					<li><a href="sumador.php">Promedio</a></li>
					<li><a href="acumulador.php">Área triángulo</a></li>
				</ul>
			</li>

		</ul>
		

	</nav>
		<br>
		<br>
		<br>
	<div class="container">
	<h2>Calcular el precio de la factura de la luz en Colombia</h2>
	<form action="luz.php" method="post" class="luz-form">
		Consumo en kWh: <input type="number" name="consumo" required><br>
		<input type="submit" name="submit" value="Calcular precio" class="submit-button">
	</form>
	<?php
	if (isset($_POST['submit'])) {
		$consumo = $_POST['consumo']; 
		$costo_unitario = 0.123; // Precio por kWh en Colombia
		
		// Cálculo del precio
		$precio = $consumo * $costo_unitario;
		
		echo "<p class='resultado'>El precio de la factura de la luz es: $" . $precio . "</p>";
	} 
	?>
	</div>
</body>
</html>

