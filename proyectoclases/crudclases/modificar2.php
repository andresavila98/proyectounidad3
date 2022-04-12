<?php 

	ModificarProducto($_POST['no'],$_POST['id'],$_POST['clase'],$_POST['maestro'],$_POST['semestre']);

	function ModificarProducto($no,$id,$clase,$maestro,$semestre)
	{
		include '../conectcrud.php';
		$sentencia="UPDATE clases SET id='".$id."', clase='".$clase."', maestro='".$maestro."', semestre='".$semestre."' WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al actualizar clase".mysqli_error($conexion));
	}
 ?>
 <script type="text/javascript">
	alert("Se ha actualizado la clase");
	window.location.href='../clases.php';
</script>
