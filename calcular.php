<?php
require_once "calculadora.php";
$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];
$op = $_POST["op"];

$casio = new calculadora();

$casio->numero1 = $n1;
$casio->numero2 = $n2;
