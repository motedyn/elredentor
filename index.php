<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="ercss/inicio.css">
    <script type="text/javascript" src="js/jquery.js"></script> 
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>Redentor</title>
    
</head>
<body id="body2">

<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
	<a class="navbar-brand" href="#">Colegio Evangelico "El Redentor"</a>
		<ul class="nav navbar-nav">
		<li class="active">
			<a href="#">Ayuda</a>
		</li>
	</ul>
</nav>


    <div class="col-md-4 col-md-offset-4"  style="margin-top: 130px" align="center">
        <div id="bienvenido">
            <label for="">Bienvenido Docente</label>
        </div>
            <form action="sesion.php" method="post" class="form-signin" role="form"  autocomplete="off">
                    <div class="campos">        
                        <p><input name="usuario" class="form-control" type="text" autofocus="" required="" placeholder="Nombre de usuario"></input></p>
                        <p><input name="password" class="form-control" type="password" required="" placeholder="Contraseña"></input></p>
                    </div>
                    <div class="rContraseña "> 
                        <label class="checkbox">
                            <input type="checkbox" value="recordar"></input>
                            Recordar contraseña
                         </label>
                    </div>
                    <div class="iSesion">
                        <p><button class="btn  btn-danger btn-block" type="submit">Ingresar</button></p>
                    </div>
            </form>
    </div>

 </body>
 </html>
