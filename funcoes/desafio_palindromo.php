<div class="titulo">Desafio Palindromo</div>

<?php 

//Método um
function ehPalindromo($palavra) {
    if($palavra === strrev($palavra)) {
        echo "A palavra {$palavra} é um palíndromo";
    } else {
        echo "A palavra {$palavra} não é um palíndromo";
    }
}
ehPalindromo("anao");

echo "<br>";

//Método dois

function ehPalindromo2($palvra) {
    $ultimoIndice = strlen($palavra) - 1;
    for ($i=0; $i <= $ultimoIndice; $i++) { 
        if($palavra[$i] != $palavra[$ultimoIndice - $i]) {
            return "Não";
            } 
        }
    return "Sim";
}

echo ehPalindromo("ana");