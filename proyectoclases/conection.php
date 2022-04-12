<?php 
	$username = $_POST['username'];
	$contrasena=$_POST['contrasena'];

	//Conectar a la base de datos 
	$conexion=mysqli_connect("database", "candia", "candia", "candiacinemas");
	$consulta="SELECT * FROM users WHERE username='$username' and contrasena='$contrasena'";
	$resultado=mysqli_query($conexion, $consulta);

	$filas=mysqli_num_rows($resultado);

	if ($filas>0) {
		header("location:bienvenido.html");
	}else{
		echo "Error en la autenticación";
		
	}
	mysqli_free_result($resultado);
	mysqli_close($conexion);

 ?>
