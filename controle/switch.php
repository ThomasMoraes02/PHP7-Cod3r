<div class="titulo">Switch</div>

<?php 

$categoria = "Luxo";
$preco = 0.0;
$carro = "";

if($categoria === "Luxo") {
    $carro = "Mercedes";
    $preco = 250000;
} else if($categoria === "SUV") {
    $carro = "Renegade";
    $preco = 80000;
} else if ($categoria === "Sedan") {
    $carro = "Etios";
    $preco = 55000;
} else {
    $carro = "Mobi";
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ",", ".");

echo "<p>Carro: $carro <br>Preço: R$ $precoFormatado</p>";

switch ($categoria) {
    case "Luxo":
        $carro = "Mercedes";
        $preco = 250000;
    break;

    case "SUV":
        $carro = "Renegade";
        $preco = 80000;
    break;

    case "Sedan":
        $carro = "Etios";
        $preco = 55000;
    break;

    default:
        $carro = "Mobi";
        $preco = 33000;
}

echo "<p>Carro: $carro <br>Preço: R$ $precoFormatado</p>";


