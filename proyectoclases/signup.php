<?php
	
	$username = $_POST['username'];
	$contrasena=$_POST['contrasena'];

	//Conectar a la base de datos 
	$conexion=mysqli_connect("database", "candia", "candia", "candiacinemas");
	$insertar="INSERT INTO users (username, contrasena) VALUES ('$username', '$contrasena')";
	if ($resultado=mysqli_query($conexion, $insertar)) {
		header("location:login.html");
		echo ("Se ha agregado un nuevo usuario");
	}else{
		echo ("ERROR: ".mysqli_error($conexion));
	}
	mysqli_close($conexion);

?>
