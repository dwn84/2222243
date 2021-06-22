<?php
$mensaje = null;
//Validar si se han enviado datos del inicio de sesion
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once "configuracionDB.php";
	    $myDB = new mysqli($servidor, $usuario, $contra, $baseDatos) or die("Error en la conexión de base de datos, contacte al administrador");
        $contraEncriptada = md5($_REQUEST['txtPassword']);
        $sql = "select * from estudiantes where cedula ='$_REQUEST[txtCedula]' and password = '$contraEncriptada'";
        $datos = $myDB->query($sql) or die("Error en el sistema...");
		if($fila =$datos->fetch_array()){
            //redirreción - cargar otra página
            header('Location: /mostrarLista.php');
        }else{
            $mensaje = "
            <div class='alert alert-danger' role='alert'>
				Datos incorrectos
			</div>
            ";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center" style = "margin-top:50px;">Sistema de información super X</h1>
    <h2 class="text-center">Inicio de sesión</h1>
    <form method="post" action="index.php">
        <div class="mb-3">
            <label for="InputCed1" class="form-label">Cédula</label>
            <input type="text" class="form-control" name = "txtCedula" id="InputCed1" required>
        </div>
        <div class="mb-3">
            <label for="InputPassword1" class="form-label">Password</label>
            <input type="password" name = "txtPassword" class="form-control" id="InputPassword1" required>
        </div>

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form> 
    
    </div>
    <?=$mensaje;?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>