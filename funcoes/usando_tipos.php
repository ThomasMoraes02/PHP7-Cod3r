<div class="titulo">Usando tipos</div>

<?php 

function somar1($a,$b) {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1(1,2);


//////////////////

echo "<br>";

function somar2(int $a, int $b) {
    echo $a + $b;
}

somar2(1,2);


echo "<br>";

//////////
//O retorno deve ser do tipo inteiro
function somar3($a, $b): int {
    return $a + $b;
}

echo somar3(2, 5);