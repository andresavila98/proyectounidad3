<?php 
	EliminarProducto($_GET['id']);
	function EliminarProducto($id){
		include '../conectcrud.php';
		$sentencia="DELETE FROM clases WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar clase".mysqli_error($conexion));
	}
 ?>
 <script type="text/javascript">
	alert("Clase eliminada Correctamente");
	window.location.href='../clases.php';
</script>