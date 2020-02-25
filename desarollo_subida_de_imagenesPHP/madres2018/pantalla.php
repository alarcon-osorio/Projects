<?php  
include("php/conexion_pdo.php");
include("php/functions.php");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>Dia Madres Los Olivos</title>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/styles_display.css" />		
    </head>

    <body>
        <div class="slider"> 
             <img id="foto" name="foto">
        </div>
        <div>
        <center>
                <h1 id="nombre-madre"></h1>
		</center>
        </div>       
        <center>
            <div class="dedicacion">
                <h2>DEDICADO POR:</h2>
				<h3 id="dedicado-por"></h3>
            </div>
        </center>   
		
        <!-- javascript - locales -->
        <script src="js/jquery.min.js"></script>
        <script src="js/scripts.js"></script>

    </body>

    </html>
