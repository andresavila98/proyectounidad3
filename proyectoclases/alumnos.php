 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alumnos</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		
</head>
<body>
	<div class="contenido">
		<table style="margin:auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px; display: inline-block; color:white;">
			<thead>
				<a href="bienvenido.html"><button class="btn btn-info" style="margin-top: 10px;">regresar</button></a>
				<h1 style="color: #fff; ">Alumnos</h1>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Calificacion</th>
				<th><a href="agregaralumno.html"><button type="button" class="btn btn-success">Nuevo</button></a></th>
			</thead>


<?php 
			include 'conectcrud.php';
			$sql="SELECT * FROM alumnos";
			$resultado=mysqli_query($conexion,$sql );
			while ($filas=mysqli_fetch_assoc($resultado)) {
				echo "<tr>";
				echo "<td>"; echo $filas['id']; echo "</td>";
				echo "<td>"; echo $filas['nombre']; echo "</td>";
				echo "<td>"; echo $filas['apellido']; echo "</td>";
				echo "<td>"; echo $filas['calificacion']; echo "</td>";
				echo "<td><a href='crudalumnos/modificar.php?id=".$filas['id']."'><button type='button' class='btn btn-info'>Modificar</button></a> </td>";
				echo "<td><a href='crudalumnos/eliminar.php?id=".$filas['id']."'><button type='button' class='btn btn-danger'>Eliminar</button></a></td>";
				echo "</tr>"; 
			}
 ?>
 </table>
	</div>

	
</body>
</html>