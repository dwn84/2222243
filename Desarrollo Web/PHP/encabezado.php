
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?></title>
	<link rel="icon" type="image/png" href="miFavicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	
	<?php 
		session_start();
		if(isset($_SESSION['usuario'])){
	?>
	
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
			<a class="navbar-brand" href="#"><?=$_SESSION['usuario']?></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="formularioNuevo.php">Registrar</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="mostrarLista.php">Mostrar lista</a>
				</li>				
				<li class="nav-item">
				  <a class="nav-link" href="cerrarSesion.php">Cerrar sesión</a>
				</li>				
			  </ul>
			  <form action="buscarCedula.php" method="Post" class="d-flex">
				<input class="form-control me-2" name="txtCedula" type="search" placeholder="Buscar por cédula" aria-label="Buscar">
				<button class="btn btn-outline-primary" type="submit">Buscar</button>
			  </form>
			</div>
		  </div>
		</nav>
		
<?php 
	}else{
		echo "
		<div class='alert alert-danger' role='alert' style='margin-top:55px;'>
            Acceso denegado. 
			Debe <a href='index.php'>iniciar sesión</a>
        </div>"
	
		;
		exit;
	}
?>	