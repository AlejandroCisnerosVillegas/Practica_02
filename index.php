<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Sistema de Gestión de Inventario</title>
		<link rel="stylesheet" href="style.css">
		<link href="../../assets/img/logo.png" rel="icon">
        <link href="../../assets/img/logo-grande.png" rel="apple-touch-icon">
	</head>
	<body>
		<?php include('conexion.php'); ?>
		<div class="container">
			<h1>Listado de Productos</h1>
			<table>
				<thead>
					<tr>
						<th>Imagen</th>
						<th>ID</th>
						<th>Producto</th>
						<th>Precio</th>
						<th>Stock</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = "select * from poject_15_productos";
					$resultado = mysqli_query($conn, $sql);
					while ($mostrar = mysqli_fetch_array($resultado)) {
					?>
						<tr>
							<td><?php echo "<img src='img/" . $mostrar['imagen'] . ".png' alt='Producto' width='80' height='80'>" ?></td>
							<td><?php echo $mostrar['codigo'] ?></td>
							<td><?php echo $mostrar['producto'] ?></td>
							<td><?php echo $mostrar['precio'] ?></td>
							<td><?php echo $mostrar['stock'] ?></td>
							<td><?php echo "<a href='recibir.php?id=" . $mostrar['codigo'] . "&nombre=" . $mostrar['producto'] . "'>Agregar</a>" ?></td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>