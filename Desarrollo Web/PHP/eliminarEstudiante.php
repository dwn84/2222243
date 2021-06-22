<?php
	$titulo = "Estudiante borrado";
	include "encabezado.php";

	require_once "configuracionDB.php";
	$myDB = new mysqli($servidor, $usuario, $contra, $baseDatos) or die("Error en la conexión de base de datos, contacte al administrador");
		
	$sql = "delete from estudiantes where cedula = $_REQUEST[txtCedulaBorrar]";
	
	$myDB->query($sql)or die("Error en el sistema...");
	
	echo "
			<div class='alert alert-success' role='alert'>
				Estudiante borrado correctamente
			</div>
		";	

	require_once "piePagina.php";

?>