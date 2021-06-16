<?php 

	$titulo = "Formulario registro";
	include "encabezado.php";

?>

        <h1 style="margin-top: 20px;">Formulario de registro de estudiante</h1>

        <form action="nuevoEstudiante.php" method="POST">

            <div class="mb-3">
              <label for="txtcedula" class="form-label">Cedula</label>
              <input type="text" name="txtcedula" class="form-control" id="txtcedula" required>
            </div>
            <div class="mb-3">
                <label for="txtnombre" class="form-label">Nombre</label>
                <input type="text" name="txtnombre" class="form-control" id="txtnombre" required>
              </div>
              <div class="mb-3">
                <label for="txtapellido" class="form-label">Apellido</label>
                <input type="text" name="txtapellido" class="form-control" id="txtapellido" required>
              </div>
              <div class="mb-3">
                <label for="txtfecha" class="form-label">Fecha de nacimiento</label>
                <input type="text" name="txtfecha" class="form-control" id="txtfecha" required>
              </div>
              <div class="mb-3">
                <label for="txttelefono" class="form-label">Teléfono</label>
                <input type="text" name="txttelefono" class="form-control" id="txttelefono" required>
              </div>

            <button type="submit" class="btn btn-primary">Enviar datos</button>
          </form>
	
<?php	
	include "piePagina.php";
?>
    