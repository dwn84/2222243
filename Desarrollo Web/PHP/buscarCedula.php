<?php 

	$titulo = "Resultados de búsqueda";
	include "encabezado.php";

?>

	<h1 class="text-center">Lista de resultados</h1>
	
	<!-- Tarea
	
	1. establecer la conexion a la base de datos
	-->
	
	<?php
	require_once "configuracionDB.php";
	$myDB = new mysqli($servidor, $usuario, $contra, $baseDatos) or die("Error en la conexión de base de datos, contacte al administrador");
	
	
	/*
	2. Formar una consulta sql con un where que recibe el parámetro del formulario de búsqueda
	*/
	
	$sql = "select * from estudiantes where cedula = $_REQUEST[txtCedula]";
	
	/*3. Ejecutar la consulta, mostrar los resultados*/
	
	$datos = $myDB->query($sql)or die("Error en el sistema...");
		
	if($fila =$datos->fetch_array()){
		echo "
		<table class='table table-dark table-hover' style='margin-top:35px'>
			<tr>
				<th>Cedula</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Fecha de nacimiento</th>
				<th>Télefono</th>
			</tr>		
			<tr> 
				<td>$fila[cedula]</td>
				<td>$fila[nombre]</td>
				<td>$fila[apellido]</td>
				<td>$fila[fechaNac]</td>						
				<td>$fila[telefono]</td>
			</tr>
		</table>	
			<button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#VentanaEliminar'>Eliminar</button>
			<button type='button' class='btn btn-info'>Actualizar</button>
		
			"
			;			
		
	}else{/*4. Si no reciben resultados, mostrar una alerta*/
		echo "
			<div class='alert alert-warning' role='alert'>
				No se encuentran datos de la cédula: $_REQUEST[txtCedula]
			</div>
		";		
	}	
	
	include "piePagina.php";
?>



<!-- Modal de eliminar-->
<div class="modal fade" id="VentanaEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Borrar estudiante</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Esta seguro que desea borrar al estudiante con cédula <?="$_REQUEST[txtCedula]"?>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <form action="eliminarEstudiante.php" method="post">
			<input type ="hidden" name="txtCedulaBorrar" value =<?="$_REQUEST[txtCedula]"?>>
			<button type="submit" class="btn btn-primary">Si</button>
		</form>
      </div>
    </div>
  </div>
</div>

<!-- Modal de actualizar...-->
    