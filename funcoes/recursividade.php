<div class="titulo">Recursividade</div>

<?php 

function somaUmAte($numero) {
    $soma = 0;
    for(; $numero >= 1;$numero--) {
        $soma += $numero;
    }
    return $soma;
}

echo somaUmAte(10) . "<br>";