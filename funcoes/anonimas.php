<div class="titulo">Funções Anônimas</div>

<?php 

$soma = function($a, $b) {
    return $a + $b;
};

echo $soma(1,5);

echo "<br>";

function executar($a, $b, $operacao, $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $operacao $b = $resultado<br>";
}

executar(2,3, '+', $soma);

$multiplicacao = function($a, $b) {
    return $a * $b;
};

executar(2,3, "*", $multiplicacao);