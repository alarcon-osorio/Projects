<?php  
function obtenerRegistro(){
	global $bd;
	$res=$bd->query("SELECT id FROM imagenes WHERE ultimo=1 ORDER BY id ASC LIMIT 1"); //Reinicia el conteo a 1 (PONER LIMIT 0)
	//die($bd);
	$rta=$res->fetch(PDO::FETCH_ASSOC);
	if($rta['id']){
		$desdeID=$rta['id'];
	} else {
		$desdeID="0";
	}

	$res=$bd->query("SELECT * FROM imagenes WHERE id>$desdeID ORDER BY id ASC LIMIT 1");//Pausa el conteo (QUITAR 1 A LIMIT)
	$rta=$res->fetch(PDO::FETCH_ASSOC);
	if(!$rta){
		$res=$bd->query("SELECT * FROM imagenes WHERE id>0 ORDER BY id ASC LIMIT 1");
		$rta=$res->fetch(PDO::FETCH_ASSOC);
	}

	$res=$bd->prepare("UPDATE imagenes SET ultimo=0; UPDATE imagenes SET ultimo=1 WHERE id=".$rta['id'].";"); //Reinia el conteo (Otra forma)
	$res->execute();

	return $rta;
}

if(isset($_GET['accion'])){
	if($_GET['accion']=='registro'){
	$reg=obtenerRegistro();
	echo json_encode($reg);
	$bd=null;
	exit();
}
}
?>