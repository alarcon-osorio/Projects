<?php
class myDBC

	{
	public $mysqli = null;

	public

	function __construct()
		{
		include_once 'dbconfig.php';

		$this->mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		if ($this->mysqli->connect_errno)
			{
			echo "Error MySQLi: (" & nbsp . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
			exit();
			}

		$this->mysqli->set_charset("utf8");
		}

	public

	function __destruct()
		{
		$this->CloseDB();
		}

	public

	function runQuery($qry)
		{
		$result = $this->mysqli->query($qry);
		return $result;
		}

	public

	function CloseDB()
		{
		$this->mysqli->close();
		}

	public

	function clearText($text)
		{
		$text = trim($text);
		return $this->mysqli->real_escape_string($text);
		}

	public

	function subirTodo($n_madre, $name, $email, $cel, $ruta)
		{
		$q = "INSERT INTO imagenes (n_madre, name, email, cel, ruta) VALUES ('$n_madre', '$name', '$email', '$cel', '$ruta')";
		$result = $this->mysqli->query($q);
		if ($result)
			{ //Si resultado es true, se agregó correctamente
			echo '<script type="text/javascript">
						alert("Foto Subida Correctamente\n¡¡¡Gracias por participar en este gran Homenaje. Te esperamos el domingo 13 de Mayo a las 09:00am en el Jardín Parque Cementerio Los Olivos - Km 1,7 vía Siberia!!!");
						window.location="../index.php"
						</script>';
			}
		  else
			{ //Si hubo error al insertar, se avisa --  para esto es importante que el campo ruta en base de datos este UNIQUE
			echo '<script type="text/javascript">
					 alert("VERIFICA ESTAS SUGERENCIAS Y VUELVE A SUBIR LA FOTO.\n\nSUGERENCIAS:\n1. Cambia el nombre de la foto.\n2. Verifica el Tamaño máximo permitido (5MB).\n3. Seguramente ya subiste la foto.");
					 window.location="../index.php"
					 </script>';
			}
		}

	public

	function seleccionar_images()
		{
		$q = "select ruta from imagenes";
		$result = $this->mysqli->query($q);

		// Array asociativo que contendrá los datos

		$valores = array();

		// Si no hay resultados
		// Se avisa al usuario y se redirige al index de la aplicación

		if ($result->num_rows == 0)
			{
			echo '<script type="text/javascript">
              alert("No existe ningún registro, por el momento seras el primero en inscribir a tu Mamita.");
            </script>';
			return false;
			}

		// En otro caso, se recibe la información y se
		// se regresa un array con los datos de la consulta

		  else
			{
			while ($row = mysqli_fetch_assoc($result))
				{

				// Se agrega cada valor en el array

				array_push($valores, $row);
				}
			}

		// Regresa array asociativo

		return $valores;
		}
	}

?>