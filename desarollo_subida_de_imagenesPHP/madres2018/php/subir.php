<?php
include('myDBC.php'); 
//Define Tamaño de archivo 5MB
define('LIMITE', 5000); 
//Define el arreglo con extensiones permitidas usando serialize
define('ARREGLO', serialize( array('image/jpg', 'image/jpeg', 'image/gif','image/png')));


	
$PERMITIDOS = unserialize(ARREGLO); //Usar unserialize para obtener el arreglo

$subirInformacion = new myDBC(); //Objeto para conexión a BD

	if ($_FILES["file"]["error"] > 0){
			echo'<script type="text/javascript">
						alert("Exede el tamaño permitido, verifica las instrucciones para saber el tamaño y formato apropiado.");
						window.location="../index.php"
						</script>';
	}
	else {
			
		if (in_array($_FILES['file']['type'], $PERMITIDOS) && $_FILES['file']['size'] <= LIMITE * 1024){
			
			//Desde subir.php a la carpeta imagenes hay que salir un directorio
			//../imagenes/nombreDeArchivo
			$rutaEnServidor = "../imagenes/" . $_FILES['file']['name'];
			
			//Desde index.php, la carpeta imagenes está en imagenes/nombreDeArchivo 
			$ruta = "imagenes/" . $_FILES['file']['name'];
			
			if (!file_exists($ruta)){
				$resultado = move_uploaded_file($_FILES["file"]["tmp_name"], $rutaEnServidor);
				
				if ($resultado){
					$n_madre= $_POST['nombre_madre'];
					$name= $_POST['nombre'];
					$email = $_POST['email'];
					$cel = $_POST['cel'];
					$subirInformacion->subirTodo($n_madre, $name, $email, $cel, $ruta);
				
				}else {
					echo'<script type="text/javascript">
						alert("Ocurrió un error al mover archivo.");
						window.location="../index.php"
						</script>';	
				}
				
			}else{
					echo'<script type="text/javascript">
						alert("Este archivo ya existe.");
						window.location="../index.php"
						</script>';
			}
		
		}else {
			echo'<script type="text/javascript">
						alert("Exede el tamaño permitido, verifica las instrucciones para saber el tamaño y formato apropiado.");
						window.location="../index.php"
						</script>';
		}
	}

?>
