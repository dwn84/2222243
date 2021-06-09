<?php

class Concesionario{
	//atributos de la clase - propiedades
	private $id;
	private $direccion;
	private $representanteLegal;
	private $marcaEstandar;
	private $totalVentasNuevos;
	private $vehiculosNuevos;
	private $vehiculosUsados;
	private $totalVentasUsados;

	//métodos - acciones 
	public function ventaNuevo(){
		$this->totalVentasNuevos++;		
	}
	public function mostrarVentasNuevos(){
		return $this->totalVentasNuevos;		
	}
	
	public function ventaUsado(){
		$this->totalVentasUsados++;
	}
	public function mostrarVentasUsados(){
		return $this->totalVentasUsados;
	}
	
	public function agregarVehiculoNuevo($modelo,$color,$caballosFuerza){
		$this->vehiculosNuevos[] = array($modelo, $color, $caballosFuerza);
	}
	public function mostrarVehiculosNuevos(){
		return $this->vehiculosNuevos;
	}
	
	public function agregarVehiculoUsado($modelo,$color,$caballosFuerza,$kilometrosrecorridos){
		$this->vehiculosUsados[] = array($modelo, $color, $caballosFuerza,$kilometrosrecorridos);
	}
	public function mostrarVehiculosUsados(){
		return $this->vehiculosUsados;
	}
	//encapsulación - delegar métodos para manipulación 
	//de atributos. Equivalente en Java a getter y setter
	public function asignarId($id){
		$this->id = $id;
	}
	public function modificarRepresentanteLegal($representanteLegal){
		$this->representanteLegal = $representanteLegal;
	}
	public function modificarMarcaEstandar($marcaEstandar){
		$this->marcaEstandar=$marcaEstandar;		
	}
	public function mostrarDetallesConcesionario(){
		$mensaje = "El concesionario tiene código: ".$this->id;
		$mensaje .= "<br> El representante legal es: ". $this->representanteLegal;
		$mensaje .= "<br> La marca insignia es: ". $this->marcaEstandar;
		return $mensaje;
	}	
}
//crear o instanciar el objeto

$ayuraMotor = new Concesionario();

$ayuraMotor->asignarId(85145);
$ayuraMotor->modificarRepresentanteLegal("Eddie");
$ayuraMotor->modificarMarcaEstandar("Chevrolet");

$ayuraMotor->agregarVehiculoNuevo("Chevrolet X","Azul","550 hp");
$ayuraMotor->agregarVehiculoNuevo("Chevrolet Alpha","Verde Cepia","350 hp");

echo "
<html>
<head>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
</head>
";

echo $ayuraMotor->mostrarDetallesConcesionario();
$ayuraMotor->ventaNuevo();
echo "<br>Total de vehiculos nuevos vendidos: ".$ayuraMotor->mostrarVentasNuevos();

echo "
<table class='table table-dark table-hover'>
  <tr>
	<th>Modelo</th>
	<th>Color</th>
	<th>Caballos de fuerza</th>	
  </tr>";
  
  foreach($ayuraMotor->mostrarVehiculosNuevos() as $vehiculos){
	  echo "<tr>";
	  foreach($vehiculos as $caracteristicas){			
			echo "<td>".$caracteristicas."</td>"; 
	  }	  
	  echo "</tr>";
  }



?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</html>