<?php
	$ip = "database";
	$usr = "jesus";
	$pass = "jesus";
	$bd = "escuela";
	
	$id=$_REQUEST['id'];
	$nom = $_REQUEST['nombre'];
	$apellido = $_REQUEST['apellido'];
	$calificacion = $_REQUEST['calificacion'];

	$conn = mysqli_connect($ip, $usr, $pass, $bd);
	if (!$conn){
		die("No se pudo conectar al servidor con los parámetros especificados.".mysqli_connect_error());
	}

	$sql = "insert into alumnos values('$id','$nom','$apellido','$calificacion')";

	mysqli_query($conn, $sql);


	mysqli_close($conn);
?>
<script type="text/javascript">
	alert("Se ha agregado un nuevo alumno");
	window.location.href='../alumnos.php';
</script>