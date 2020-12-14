<div class="titulo">Foreach</div>


<?php 

$array = ["Domingo",'Segunda', "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];

foreach($array as $valor) {
    echo $valor . "<br>"; 
}

echo "<br>";

foreach($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

