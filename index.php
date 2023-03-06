<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="../../assets/img/Favicon-img.png">
		<title>Practica 02</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<?php include('conexion.php');?>

<table>

<tr><th colspan="6"><h1>Listado de productos</h1></th></tr>
<tr>

<th>Imagen</th>
<th>ID</th>
<th>Producto</th>
<th>Precio</th>
<th>Stock</th>
<th>Acción</th>

</tr>

<?php

$sql="select * from poject_15_productos";
$resultado=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($resultado))

{
?>

<tr>
	<td><?php echo "<img width='80' height='80' src='img/".$mostrar['imagen'].".png'>" ?></td>
	<td><?php echo $mostrar['codigo'] ?></td>
	<td><?php echo $mostrar['producto'] ?></td>
	<td><?php echo $mostrar['precio'] ?></td>
	<td><?php echo $mostrar['stock'] ?></td>
	<td><?php echo "<a href='recibir.php?id=".$mostrar['codigo']."&nombre=".$mostrar['producto']."'>Agregar</a>"?></td>
</tr>

<?php
}
?>

</table>
</body>

</html>