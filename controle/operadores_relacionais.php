<div class="titulo">Operadores Relacionais</div>


<?php 

var_dump(1 == 1);
var_dump(1 > 1) ;
var_dump(1 >= 1);
var_dump(1 != 1);
var_dump(1 <> 1);

echo "<br>";

//Verdadeiro pois o conteudo é igual
var_dump(1 == "1");

echo "<br>";

var_dump(111 === "111");

echo "<br>";

var_dump(1 == "um");

echo "<p>Relacionais no If/Else</p><hr>";

$idade = 25;

if($idade < 18) {
    echo "Menor de idade";
} else if ($idade <= 65) {
    echo "Maior de idade";
} else {
    echo "Terceira idade";
}


echo "<p>Spaceship</p><hr>";
var_dump(5 <=> 3);





?>

<style>
    p {
        margin-bottom:-0px;
    }

    hr {
        margin-top:0px;
    }
</style>