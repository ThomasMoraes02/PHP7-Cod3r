<div class="titulo">Closure & Callable</div>

<?php 

//Callable --> Pode ser chamada
$soma1 = function($a, $b) {
    return $a + $b;
};

echo $soma1(5,5) . "<br>";
echo is_callable($soma1) ? "Sim" : "Não" . "<br>";

echo "<br>";

$soma1 = 1;
echo is_callable($soma1) ? "Sim" : "Não" . "<br>";

echo "<br>";

function soma2($a, $b) {
    return $a + $b;
};

echo is_callable(soma2(5,5)) ? "Sim" : "Não" . "<br>";
 

//Uma função normal não é um clojure