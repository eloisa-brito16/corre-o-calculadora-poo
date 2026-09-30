<?php

class Calculadora{

public $numero1;
public $numero2;
public $resultado;
public $operacao;

public function somar(){
$this->resultado = $this->numero1 + $this->numero2;
}

public function subtrair(){
$this->resultado = $this->numero1 - $this->numero2;
}

public function multiplicar(){
$this->resultado = $this->numero1 * $this->numero2;
}

public function dividir(){
$this->resultado = $this->numero1 / $this->numero2;
}

}