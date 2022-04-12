<?php
	$ip = "database";
	$usr = "avila";
	$pass = "avila";
	$bd = "escuela";
	
	$id=$_REQUEST['id'];
	$clase = $_REQUEST['clase'];
	$maestro = $_REQUEST['maestro'];
	$semestre = $_REQUEST['semestre'];

	$conn = mysqli_connect($ip, $usr, $pass, $bd);
	if (!$conn){
		die("No se pudo conectar al servidor con los parámetros especificados.".mysqli_connect_error());
	}

	$sql = "insert into clases values('$id','$clase','$maestro','$semestre')";

	mysqli_query($conn, $sql);


	mysqli_close($conn);
?>
<script type="text/javascript">
	alert("Se ha agregado una nueva clase");
	window.location.href='../clases.php';
</script>