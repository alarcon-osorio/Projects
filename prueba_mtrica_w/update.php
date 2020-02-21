<?php
	include 'includes/header.php';

	if (isset($_GET['id'])){
		$id=intval($_GET['id']);
	} else {
		header("location:index.php");
	}
?>
<div class="container">
	<div class="table-wrapper">
		<div class="table-title">
			<div class="row">
				<div class="col-sm-8"><h2>Editar Usuario</h2></div>
			</div>
		</div>
		<?php
			$usuarios= new Conect();			
			if(isset($_POST) && !empty($_POST)){
				$nombres = $usuarios->sanitize($_POST['nombres']);
				$apellidos = $usuarios->sanitize($_POST['apellidos']);
				$telefono = $usuarios->sanitize($_POST['telefono']);
				$direccion = $usuarios->sanitize($_POST['direccion']);
				$correo_electronico = $usuarios->sanitize($_POST['correo_electronico']);
				$contrasena = $usuarios->sanitize(md5($_POST['contrasena']));
				$id_usuario=intval($_POST['id_usuario']);
				$res = $usuarios->update($nombres, $apellidos, $telefono, $direccion, $correo_electronico, $contrasena, $id_usuario);
				if($res){
					$message= "Datos actualizados con éxito";
					$class="alert alert-success";
					
				}else{
					$message="No se pudieron actualizar los datos";
					$class="alert alert-danger";
				}
				
				?>
			<div class="<?php echo $class?>">
				<?php echo $message;?>
			</div>	
				<?php
			}
			$datos_usuarios=$usuarios->single_record($id);
		?>
		<div class="row">
			<form method="post">
			<div class="col-md-6">
				<label>Nombres:</label>
				<input type="text" name="nombres" id="nombres" class='form-control' maxlength="100" required  value="<?php echo $datos_usuarios->nombres;?>">
				<input type="hidden" name="id_usuario" id="id_usuario" class='form-control' maxlength="100"   value="<?php echo $datos_usuarios->id;?>">
			</div>
			<div class="col-md-6">
				<label>Apellidos:</label>
				<input type="text" name="apellidos" id="apellidos" class='form-control' maxlength="100" required value="<?php echo $datos_usuarios->apellidos;?>">
			</div>
			<div class="col-md-6">
				<label>Dirección:</label>
				<input name="direccion" id="direccion" class='form-control' maxlength="255" required value="<?php echo $datos_usuarios->direccion;?>">
			</div>
			<div class="col-md-6">
				<label>Teléfono:</label>
				<input type="text" name="telefono" id="telefono" class='form-control' maxlength="15" required value="<?php echo $datos_usuarios->telefono;?>">
			</div>
			<div class="col-md-6">
				<label>Correo electrónico:</label>
				<input type="email" name="correo_electronico" id="correo_electronico" class='form-control' maxlength="64" required value="<?php echo $datos_usuarios->correo_electronico;?>">
			</div>
			<div class="col-md-6">
				<label>Contraseña:</label>
				<input type="password" name="contrasena" id="contrasena" class='form-control' maxlength="64" placeholder="**************">
			</div>
			
			<div class="col-md-12 pull-right">
			<hr>
				<button type="submit" class="btn btn-success">Actualizar datos</button>
				<a href="index.php" class="btn btn-danger add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
			</div>
			</form>
		</div>
	</div>
</div> 
<?php
 	include 'includes/footer.php';
?>