<div class="titulo">While/Do While</div>

<?php 

const VALOR_LIMITE = 5;
$contador = 0;

//While ----- Repita
while ($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
}

echo "<br>";

//Do While ----- Enquanto - Repita
do {
    echo "do-while $contador <br>";
    $contador++;
} while ($contador < VALOR_LIMITE);