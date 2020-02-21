<?php
	include 'includes/header.php';
?>

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Agregar nuevo Usuario</h2></div>                    
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
					
					$res = $usuarios->create($nombres, $apellidos, $telefono, $direccion, $correo_electronico, $contrasena);
					if($res){
						$message= "Datos insertados con éxito";
						$class="alert alert-success";
					}else{
						$message="No se pudieron insertar los datos tu EMAIL ya esta registrado";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
	
			?>
			<div class="row">
				<form method="post">
				<div class="col-md-6">
					<label>Nombres:</label>
					<input type="text" name="nombres" id="nombres" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Apellidos:</label>
					<input type="text" name="apellidos" id="apellidos" class='form-control' maxlength="100" required>
				</div>
				<div class="col-md-6">
					<label>Dirección:</label>
					<input type="text" name="direccion" id="direccion" class='form-control' maxlength="100" required>
				</div>					
				<div class="col-md-6">
					<label>Teléfono:</label>
					<input type="text" name="telefono" id="telefono" class='form-control' maxlength="15" required >
				</div>
				<div class="col-md-6">
					<label>Correo electrónico:</label>
					<input type="email" name="correo_electronico" id="correo_electronico" class='form-control' maxlength="64" required>				
				</div>
				<div class="col-md-6">
					<label>Contraseña:</label>
					<input type="password" name="contrasena" id="contrasena" class='form-control' maxlength="100" required>
				</div>
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar datos</button>				
					<a href="index.php" class="btn btn-danger add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
				</div>
				</form>
			</div>
		</div>		
	</div> 
		
	    
<?php
	include 'includes/footer.php';
?>                           