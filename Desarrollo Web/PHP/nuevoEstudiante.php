<?php 

	$titulo = "Confirmación registro";
	include "encabezado.php";

?>
        <h1>Registro estudiante</h1>

        <?php
            require_once "configuracionDB.php";
            $myDB = new mysqli($servidor, $usuario, $contra, $baseDatos);
			//echo $_REQUEST;
			//var_dump($_REQUEST);
			$sql = "insert into estudiantes values('$_REQUEST[txtcedula]','$_REQUEST[txtnombre]',
			'$_REQUEST[txtapellido]','$_REQUEST[txtfecha]', '$_REQUEST[txttelefono]')";
			//echo $sql;
			$myDB->query($sql) or die("<div class='alert alert-danger' role='alert'>
            Error interno del sistema</div>");
        ?>


        <div class="alert alert-success" role="alert">
            Registro exitoso
        </div>
        
<?php
	include "piePagina.php";
?>
