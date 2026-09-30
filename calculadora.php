<?php

class Calculadora{

public $numero1;
public $numero2;
public $resultado;
public $operacao;

public function somar(){
$this->resultado = $this->numero1 + $this->numero2;
$this->exibir();
}

public function soma(){
$this->resultado = $n1+$n2;
$this->exibir();
}

public function subtrair(){
$this->resultado = $this->numero1 - $this->numero2;
$this->exibir();
}

public function multiplicar(){
$this->resultado = $this->numero1 * $this->numero2;
$this->exibir();
}

public function dividir(){
    if($this->numero2==0){
        echo "Não é possível dividir";
    } else {

        $this->resultado = $this->numero1 / $this->numero2;
        $this->exibir();
    
$this->resultado = $this->numero1 / $this->numero2;
$this->exibir();
}

public function exibir(){ //metodo
    echo "<hr><br>".$this->resultado;
}
}

public function chapeuSelector(){

switch ($this->operacao) {
    case '+':
        $this->somar();
    break;

    case '-':
    $this->subtrair();
    break;

    case '*':
    $this->multiplicar();
    break;

    case '/':
    $this->divisao();
    break;

    default:
        echo "operacao invalida";
        break;

}

}
}