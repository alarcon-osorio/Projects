<?php 
    include 'includes/header.php';
?>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h2>Bienvenido: <?php ?> </strong></h2></div>                
            </div>
        </div>
        <table class="table table-bordered" id="data_table">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>E-mail</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <?php 
            $usuarios= new Conect();
            $listado=$usuarios->read();
            ?>
            <tbody>
                <?php 
                while ($row=mysqli_fetch_object($listado)){
                    $id=$row->id;
                    $nombres=$row->nombres." ".$row->apellidos;
                    $telefono=$row->telefono;
                    $direccion=$row->direccion;
                    $email=$row->correo_electronico;
                ?>
                <tr>
                    <td><?php echo $nombres;?></td>
                    <td><?php echo $telefono;?></td>
                    <td><?php echo $direccion;?></td>
                    <td><?php echo $email;?></td>
                    <td>
                        <a href="update.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="delete.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                    </td>                    
                </tr>	
            <?php
                }
            ?>
          
            </tbody>
        </table>
    </div>
    <div class="col-sm-4">
        <a href="create.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Usuario</a>
    </div>
</div>     
<?php
    include 'includes/footer.php';
?>