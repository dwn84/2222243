<?php

    //1.cargar encabezado
	$titulo = "Actulizción de datos";
	include "encabezado.php";

    //2.conectarse a la base de datos
    require_once "configuracionDB.php";
	$myDB = new mysqli($servidor, $usuario, $contra, $baseDatos) or die("Error en la conexión de base de datos, contacte al administrador");
	
    //3.organizar una consulta update, entregar los datos del formulario
    $sql = "update estudiantes 
                                set 
                                    cedula = '$_REQUEST[txtcedulaNueva]',
                                    nombre = '$_REQUEST[txtnombre]',
                                    apellido = '$_REQUEST[txtapellido]',
                                    fechaNac = '$_REQUEST[txtfecha]',
                                    telefono = '$_REQUEST[txttelefono]'
            where 
                cedula = '$_REQUEST[txtCedulaAnterior]'";    
    //4.ejecutar consulta
    $myDB->query($sql) or die("Error interno, contacte al administrador");    
    //5.mostrar mensajes de notificación
    echo "
			<div class='alert alert-success' role='alert'>
				Estudiante actualizado correctamente
			</div>
		";	
    
    include "piePagina.php";

?>