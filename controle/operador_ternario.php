<div class="titulo">Operador Ternário</div>

<?php 

$idade = 70;
$status;

if($idade >= 18) {
    $status = "Maior de idade";
} else {
    $status = "Menor de idade";
}
echo $status;


echo "<br>";

//Operador ternário 

$status = $idade >= 18 ? "Maior de idade" : "Menor de idade";
echo $status;


echo "<br>";

$status = ($idade >= 18 ? ($idade >= 65 ? "Aposentado" : "Maior de idade") : "Menor de idade");
echo $status;  