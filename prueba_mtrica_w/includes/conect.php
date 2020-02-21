<?php
	class Conect{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="metrica_w";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}
		
		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}

		public function login($correo_electronico, $contrasena){

			$contrasena = md5($contrasena);
			$sql="SELECT correo_electronico FROM usuarios WHERE correo_electronico='$correo_electronico' AND contrasena='$contrasena'";
			
			$result = mysqli_query($this->con,$sql);
			$user_data = mysqli_fetch_array($result);
			$count_row = $result->num_rows;
		
			if ($count_row == 1) {
				$_SESSION['login'] = true;
				$_SESSION['correo_electronico'] = $user_data['correo_electronico'];
				return true;
			}
			else{
				return false;
			}
		}

		public function create($nombres,$apellidos,$telefono,$direccion,$correo_electronico, $contrasena){
			$sql = "INSERT INTO usuarios (nombres, apellidos, telefono, direccion, correo_electronico,contrasena) VALUES ('$nombres', '$apellidos', '$telefono', '$direccion', '$correo_electronico', '$contrasena')";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function read(){
			$sql = "SELECT * FROM usuarios";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}
		
		public function single_record($id){
			$sql = "SELECT * FROM usuarios where id='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($nombres,$apellidos,$telefono,$direccion,$correo_electronico, $contrasena, $id){
			$sql = "UPDATE usuarios SET nombres='$nombres', apellidos='$apellidos', telefono='$telefono', direccion='$direccion', correo_electronico='$correo_electronico', contrasena='$contrasena' WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete($id){
			$sql = "DELETE FROM usuarios WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
	}
?>	

