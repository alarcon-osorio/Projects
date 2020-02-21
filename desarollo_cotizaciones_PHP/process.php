<?php
	//Capturamos los datos enviados desde el formulario
	$nombre_cliente=strip_tags($_POST['firstname']);
	$email_cliente=strip_tags($_POST['email']);
	$telefono_cliente=strip_tags($_POST['phone']);
	$estilo_camiseta=strip_tags($_POST['style']);
	$talla_camiseta=strip_tags($_POST['talla']);
	$color_camiseta=strip_tags($_POST['color']);
	$direccion_cliente=strip_tags($_POST['street']);
	$numero_calle=strip_tags($_POST['number']);
	$ciudad=strip_tags($_POST['city']);
	$codigo_pais=strip_tags($_POST['country']);
	
	//Ahora llamaremos la funcion de PHPMailer que se encargara de enviar los datos
	include('phpmailer/sendmail.php');
	$asunto="SOLICITUD DE COTIZACION";
	$plantilla="confirmation.html";
	$mi_correo="";//Email que envia
	$mi_nombre="Obed Alvarado";//Nombre de organizacion o empresa que envia
	$responder_a="info@obedalvarado.pw";//correo al cual pueden responder
	$nombres_responder="Sistemas Web";//Nombre de la organizacion a responder
	$address=array('calle'=>$direccion_cliente,'number'=>$numero_calle,'city'=>$ciudad,'country'=>$codigo_pais);//Arreglo que contiene la direccion del cliente
	$product_info="$estilo_camiseta, $talla_camiseta, Color: $color_camiseta";//Informacion del producto
	sendmail($mi_correo,$mi_nombre,$responder_a,$nombres_responder,$email_cliente,$nombre_cliente,$asunto,$plantilla,$address,$product_info);
?>
