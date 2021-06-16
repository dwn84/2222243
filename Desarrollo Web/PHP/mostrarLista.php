<?php

	$titulo = "Lista estudiantes";
	include "encabezado.php";
	
	//traer la información del archivo de configuración
	require_once "configuracionDB.php";
	//crear el objeto de conexión
	try{
		$myDB = new mysqli($servidor, $usuario, $contra, $baseDatos);
		if($myDB->connect_errno){
			die('Error de conexión');
		}else{
			echo "Conexión satisfactoria";
			$datos = $myDB->query("Select * from estudiantes");
			while($fila = $datos->fetch_array()){
				echo "<br> $fila[nombre] - $fila[apellido]";				
			}
			
			
			
		}
	}catch(Exception $e){
		echo $e->getMessage();
	}
	
	require_once "piePagina.php";

?>