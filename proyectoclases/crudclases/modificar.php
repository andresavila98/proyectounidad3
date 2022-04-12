<?php 
	$consulta=ConsultarProducto($_GET['id']);

	function ConsultarProducto($no_id){
		include '../conectcrud.php';
		$sentencia="SELECT * FROM clases WHERE id='".$no_id."' ";
		$resultado = $conexion->query($sentencia) or die ("Error al consultar clase".mysqli_error($conexion));
		$fila=$resultado->fetch_assoc();

		return[
			$fila['id'],
			$fila['clase'],
			$fila['maestro'],
			$fila['semestre'],
		];

	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Agregrar una Caricatura</title>
 	<link rel="stylesheet" type="text/css" href="../css/form.css">
 	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
 </head>
 <body>
 	<form style="color:#fff; font-size: 20px; padding-left: 20px" action="modificar2.php" method="POST">
 		<h1>Modificar clase</h1>
 		<input type="hidden" name="no">
 		ID <input type="text" name="id" id="id" value="<?php echo $consulta[0] ?>"><br>
 		CLASE <input type="text" name="clase" id="clase" value="<?php echo $consulta[1] ?>"><br>
 		MAESTRO <input type="text" name="maestro" id="maestro" value="<?php echo $consulta[2] ?>"><br>
 		SEMESTRE <input type="text" name="semestre" id="semestre" value="<?php echo $consulta[3] ?>"><br>
 		<button class="btn-success" name="update" type="submit">guardar</button>
 	</form>

 </body>
 </html>