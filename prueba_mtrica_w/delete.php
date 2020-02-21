<?php 
if (isset($_GET['id'])){
	include('includes/conect.php');
	$usuario = new Conect();
	$id=intval($_GET['id']);
	$res = $usuario->delete($id);
	if($res){
		header('location: index.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>