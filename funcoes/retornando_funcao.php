<div class="titulo">Retornando função</div>

<?php 

//"use" utiliza de um valor externo da função

function soma($a) {
    // Algoritimo
    return function($b) use ($a) {
        return $a + $b;
    };
}



echo soma(3)(3);

$doisMais = soma(2);
echo "<br>", $doisMais(10);
echo "<br>", $doisMais(18);