<?php
    setcookie("color",$_REQUEST["radioColor"],time()+(60*60*24*7));
    
    // Redirección a la página principal

    $titulo = "Configuración de color";
	include "encabezado.php";

    echo "
        <div class='alert alert-success' role='alert'>
            Configuración registrada
        </div>
    ";	
?>
