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
			//echo "Conexión satisfactoria";
			$datos = $myDB->query("Select * from estudiantes");
			
			echo "
			<table class='table table-dark table-hover' style='margin-top:35px'>
				<tr>
					<th>Cedula</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Fecha de nacimiento</th>
					<th>Télefono</th>
				</tr>
			";
			
			while($fila = $datos->fetch_array()){
				echo "
					<tr> 
						<td>$fila[cedula]</td>
						<td>$fila[nombre]</td>
						<td>$fila[apellido]</td>
						<td>$fila[fechaNac]</td>						
						<td>$fila[telefono]</td>
					</tr>	
						";				
			}
			
			echo "</table>";
			
		}
	}catch(Exception $e){
		echo $e->getMessage();
	}
	
	require_once "piePagina.php";

?>
