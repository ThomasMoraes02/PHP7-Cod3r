<div class="titulo">Desafio IntDiv</div>

<?php 

require_once("desafio_intdiv.php");

use function \Aritmetica\intDiv;

try {
    echo intDiv(8,3) . "<br>";
}catch (\Aritmetica\NaoInteiroException $e) {
    echo "Resultado não é um numero inteiro <br>";
}


try {
    echo intDiv(8,0) . "<br>";
}catch (DivisionByZeroError $e) {
    echo "Divisão por zero <br>";
}

echo intDiv(8,2)."<br>";
echo \intDiv(8,2)."<br>";