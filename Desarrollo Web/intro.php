<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	</head>
	<body>
	<!--
	tr = table row = fila de tabla
	td = table data = columna de tabla
	-->
	<?php
		$nombres = array("Mark","Eddie","Esperanza","Lady");
		$apellidos = array("Otto","Smith","Gomez","Dimitrescu");
	?>
	<div class="container text-center">
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	  </div>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="img/bmx1.jpg" class="d-block w-100" alt="..." width="640" height="360">
		  <div class="carousel-caption d-none d-md-block">
			<h5>First slide label</h5>
			<p>Some representative placeholder content for the first slide.</p>
		  </div>
		</div>
		<div class="carousel-item">
		  <img src="img/bmx2.jpg" class="d-block w-100" alt="..." width="640" height="360">
		  <div class="carousel-caption d-none d-md-block">
			<h5>Second slide label</h5>
			<p>Some representative placeholder content for the second slide.</p>
		  </div>
		</div>
		<div class="carousel-item">
		  <img src="img/bmx3.jpg" class="d-block w-100" alt="..." width="640" height="360">
		  <div class="carousel-caption d-none d-md-block">
			<h5>Third slide label</h5>
			<p>Some representative placeholder content for the third slide.</p>
		  </div>
		</div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	  </button>
	</div>
</div>
	
	<!--Código de tabla-->
	<div class="container text-center">
	<table class="table">
	  <thead>
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">First</th>
		  <th scope="col">Last</th>
		  <th scope="col">Handle</th>
		</tr>
	  </thead>
	  <tbody>
		<?php
			//Estructura de recorrido de un arreglo de forma automática
			foreach($nombres as $dt){
				echo "$dt <br>";
				
			}
			for($i=0;$i<10;$i++){
				
				echo "				
				<tr>
					<th scope='row'>". $i+1 ."</th>
					<td>$nombres[$i]</td>
					<td>$apellidos[$i]</td>
					<td>@mdo</td>
				</tr>";
				
			}
		
		?>
		</tbody>
	</table>
	</div>
	
	<form method="get" action = "receptor.php">
		<label>Nombres</label><input type="text" name="txtnombre"><br>
		<label>Apellidos</label><input type="text" name="txtapellido"><br>
		<label>Direccion</label><input type="text" name="txtdireccion"><br>
		<label>Telefono</label><input type="text" name="txttelefono"><br>
		<input type="submit" value="Enviar datos">
	</form>	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	</body>
</html>
