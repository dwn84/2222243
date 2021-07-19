<?php 
use PHPUnit\Framework\TestCase;


class verificarPrueba extends TestCase
{
    //Función o método que se va a verificar
    function distanciaH($a,$b){
        //implementar el algoritmo de comparación caracter por caracter como
        //lo propone Hamming
        //https://es.wikipedia.org/wiki/Distancia_de_Hamming
        //...
        $resultadoDistancia = 1;//...  es necesario incrementar la variable
        //...   
        
        return $resultadoDistancia;
    }
    //pruebas unitarias
    public function testArreglo()
    {
        $arreglo = [];
        $this->assertSame(0, count($arreglo));
    }    
    public function testDistanciaHamming1(){
        $a = "TGCC";
        $b = "TGGC";
        $this->assertSame(1, $this->distanciaH($a,$b));        
    }
    public function testDistanciaHamming2(){
        $a = "TGCC";
        $b = "TGCC";
        $this->assertSame(0, $this->distanciaH($a,$b));        
    }
    public function testDistanciaHamming3(){
        $a = "TAGCAC";
        $b = "TGGCTG";
        $this->assertSame(3, $this->distanciaH($a,$b));        
    }
    //Realizar una prueba unitaria, donde se verifique que las cadenas de ADN
    //tienen el mismo tamaño.Verificar un verdadero en un método que compara tamaños
    //Dos cadenas del mismo tamaño, deben retornar: true
    //Dos cadenas del tamaño diferente, deben retornar: false

    /*public function testCuentaBancaria()
    {
        $banpolombia = new cuentaBancaria();
        $banpolombia->retirarDinero(55000);
        $this->assertSame(45000, $banpolombia->mostrarSaldo());
    }
    */
}

class cuentaBancaria{
    private $saldo=100000;
    public function retirarDinero($dinero){
        $this->saldo = $this->saldo - $dinero;
    }

    public function mostrarSaldo(){
        return $this->saldo;
    }


}
