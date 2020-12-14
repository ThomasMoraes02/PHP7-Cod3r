<div class="titulo">Argumentos Variáveis</div>

<?php 

function soma($a, $b) {
    return $a + $b;
}

echo soma(4,5);

echo "<br>";

function somaCompleta(...$numeros) {
    $soma = 0;
    foreach($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1,2,3,4,5);