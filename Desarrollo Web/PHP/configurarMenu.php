<?php

	$titulo = "Cambiar color del menú";
	include "encabezado.php";
?>

<h1>Configurar color del menú</h1>

<form action="guardarConfiguracion.php" method="post">
    <div class="form-check">
    <input class="form-check-input" type="radio" value="light" name="radioColor" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">
        Blanco
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" value="danger" name="radioColor" id="flexRadioDefault2">
    <label class="form-check-label" for="flexRadioDefault2">
        Rojo
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" value="success" name="radioColor" id="flexRadioDefault3">
    <label class="form-check-label" for="flexRadioDefault3">
        Verde
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" value="secondary" name="radioColor" id="flexRadioDefault3">
    <label class="form-check-label" for="flexRadioDefault3">
        Gris
    </label>
    </div>
    <input type="submit" value="Guardar" class="btn btn-primary">
</form>

