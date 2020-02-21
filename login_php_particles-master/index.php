<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reportes Intranet</title>
    <!--Estilos propios y javascript -->
    <meta name="description" charset="utf-8" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="svg/svg.html" rel="import" />

    <script src="js/jquery.js" type="text/javascript"></script>

    <script src="js/particles.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<div class="container">

    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">

        <div class="row">
            <div class="iconmelon">
                <img src="images/logo.png" alt="">
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title text-center">INICIAR SESIÓN</div>
            </div>

            <div class="panel-body">

                <body>
                    <form  id="form" name="forma_ingreso" class="form-horizontal" method="POST" action="inicio.php">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" name="nombre_usuario" value="" placeholder="Nombre de Usuario">
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" name="pwd" placeholder="Contraseña">
                        </div>

                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-sm-12 controls">
                                <button type="submit" name="ingresar" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i>&nbsp; Ingresar </button>
                            </div>
                        </div>

                    </form>

            </div>
        </div>
    </div>

</div>
<div id="particles"></div>
<div id="footer" class="footer">
    &reg; Creado por Engineer Systems 
</div>
</body>

</html>
