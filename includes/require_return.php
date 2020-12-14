<div class="titulo">Require & Return</div>

<?php 

$valorRetorno = require("return_usado.php");

echo "$valorRetorno<br>";

echo $variavelRetornada . "<br>";

//Retorna o diretório atual
echo __DIR__ . "<br>";

$valorRetorno2 = require(__DIR__ . "/return_naoUsado.php");
var_dump($valorRetorno2) . "<br>";
echo $valorRetorno2 . "<br>";

echo $variavelDeclarado . "<br>";