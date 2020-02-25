<?php
error_reporting(0);
include_once('php/myDBC.php');

$objeto = new myDBC();
$imagenes = $objeto->seleccionar_images();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dia de la Madres 2018</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>

<!--<center><img src="images/header_banner.jpg" class="img2" ></center>-->

    <div class="container mlogin">
        <div id="login">
            <center><img src="images/logo.png"> </center>
            <form name="loginform" id="loginform" action="php/subir.php" method="POST" enctype="multipart/form-data">
                <p>
                    </br>
                    <div class="campos">
                        <label class="mamita"> Nombre de tu Mamita:</label>
                        <input type="text" name="nombre_madre" placeholder="Nombre de tu Mamita" required/>
                    </div>
                </p>
                <div class="campos">
                    <label for="imagen" class="mamita2">Fotografía de tu Mamita (Máximo 5MB) </label>
                    <input type="file" name="file" id="imagen" class="mamita2" required />
                </div>
                <p>
                    <div class="campos">
                        <label>Tu Nombre:</label>
                        <input type="text" name="nombre" placeholder="Quién dedica" required/>
                    </div>
                </p>
                <p>
                    <div class="campos">
                        <label>Tu Correo Electrónico:</label>
                        <input type="email" name="email" placeholder="ejemplo@dominio.com" required/>
                    </div>
                </p>
                <p>
                    <div class="campos">
                        <label>Tu Celular:</label>
                        <input type="number" name="cel" placeholder="Solo numeros (10)" required/>
                    </div>
                </p>
				
				<input type="submit" name="form" class="button" value="ENVIAR" />
				
			</form>				

                <div class="contenido">
                    <a href="#" class="mostrarmodal">Instrucciones</a>
                </div>
                <div class="cajaexterna">
                    <div class="cajainterna animated">
                        <div class="cajacentrada">
                            <h2>Gracias por ser parte de nuestro Homenaje a las Madres</h2>
                            <p> 
                                </br>
								</br>
								<b>Instrucciones Generales (Leer con atención)</b>
                                </br>
								</br>
                                • Por favor diligencia con cuidado cada espacio.
                                </br>
                                • Las imágenes deben estar en formato .jpg de lo contrario el sistema no efectuará la subida correctamente.
                                </br>
                                • Recuerda que el peso máximo es de 5(Megabytes).
                                </br>
                                • Procura que la fotografía sea de muy buena calidad, que no tenga espacios en blanco alrededor y que no este invertida.
                                </br>
                                • Preferiblemente pon el nombre de tu Mamita en la foto para identificarlo brevemente.
                                </br>
                                </br>
                                <b>Te esperamos el Domingo 13 de Mayo a las 09:00am en nuestro Jardín Parque Cementerio Los Olivos - Km 1,7 vía Siberia.</p></b>
                            <div class="cierramodal">
                                <a href="#" class="cerrarmodal">CERRAR</a>
                            </div>
							</br>
                        </div>
                    </div>
                </div>
        </div>
        <p class="termin">
            <input class="checkbox" type="checkbox" title="Aceptar Terminos y Condiciones" name="termin"  value="1" checked required />“He leído y Acepto la<a href="#" class="mostrarmodal2"> Política de Privacidad”</a></p>
        <div class="cajaexterna2">
            <div class="cajainterna2 animated">
                <div class="cajacentrada2">
                    <h2>Política de Privacidad</h2>
                    <p>
						</br>
                        <b>USO DE IMÁGENES:</b> </br>Autorizo a Coopserfun y a su marca Los Olivos de manera completa y sin restricciones para que la imagen adjunta sea publicada en las pantallas que se utilizarán en la celebración del día de los Angeles el 5 de Noviembre de 2017 en el Jardín Parque Cementerio Los Olivos, y en los medios de comunicación relacionados con el evento antes citado, así como el material publicitario que se derive del anterior. En consecuencia, cedo mis derechos, entre los que se encuentran los de contenido económico, para que este material pueda ser reproducido, difundido, copiado, compartido y explotado con los fines mencionados.
                        </br>
                        </br>
                        <b>PROTECCIÓN DE DATOS PERSONALES:</b></br> Autorizo a Coopserfun y a su marca Los Olivos para:
                        </br>
                        </br>
                        a) Recolectar, almacenar, utilizar, circular o suprimir los datos suministrados por mí, para propósitos comerciales, promocionales, estadísticos y relacionados con el evento previsto en el numeral anterior y la actividad de pompas fúnebres y actividades relacionadas. </br>
                        </br>
                        b) Que mis datos personales sean administrados y tratados a través de los sistemas de información de COOPSERFUN.
                        </br>
                        </br>
                        c) Que acepta que el tratamiento de los Datos Personales se realice para enviarme notificaciones, comunicaciones y mensajes a través de medios físicos y/o electrónicos relacionados con las actividades, productos y servicios que COOPSERFUN ofrece en desarrollo de su objeto social.
                        </br>
                        </br>
                        d) Que no se Transferirá ni Transmitirá los Datos Personales a terceras compañías salvo que haya obtenido la autorización previa, expresa e informada de los Titulares de los Datos Personales.
                        </br>
                        </br>
                        e) Que mediante la suscripción de este documento reconozco que COOPSERFUN me ha informado cuales son las finalidades del tratamiento y me ha comunicado mis derechos referentes a la posibilidad de solicitar conocer, actualizar y rectificar mis datos personales; solicitar prueba de la presente autorización; revocar mi autorización para el tratamiento o solicitar la supresión de mis datos personales y acceder en forma gratuita a mis datos personales, en los canales de atención de COOPSERFUN, de acuerdo a lo señalado en la Política de Tratamiento de Datos personales que se encuentra en <a href="http://www.losolivos.co">www.losolivos.co</a>. Finalmente, reconozco que tengo derecho a presentar ante la Superintendencia de Industria y Comercio reclamaciones de acuerdo con la Ley que regula el Hábeas Data.
                    </p>
                    <div class="cierramodal2">
                        <a href="#" class="cerrarmodal2">CERRAR</a>
                    </div>
                </div>
            </div>
        </div>
		
</body> 
</div>
<footer>
<!--<center><img src="images/footer_banner.png" class="img2" ></center>-->
</footer>
</html>




