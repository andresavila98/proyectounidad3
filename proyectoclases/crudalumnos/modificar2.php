<?php 

	ModificarProducto($_POST['no'],$_POST['id'],$_POST['nombre'],$_POST['apellido'],$_POST['calificacion']);

	function ModificarProducto($no,$id,$nombre,$apellido,$calificacion)
	{
		include '../conectcrud.php';
		$sentencia="UPDATE peliculas SET id='".$id."', nombre='".$nombre."', apellido='".$apellido."', calificacion='".$calificacion."' WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
 ?>
 <script type="text/javascript">
	alert("Se ha modificado el registro del alumno");
	window.location.href='../peliculas.php';
</script>
