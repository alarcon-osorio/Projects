<?php
	//CONEXION PDO
	$bd = new PDO('mysql:host=127.0.0.1;dbname=dbname', 'root', 'pass');
	$bd->exec('SET NAMES utf8');	
?>