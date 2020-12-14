<div class="titulo">Error Handler</div>

<?php 

ini_set("display_errors",1);

echo 4 / 0 . "<br>";

error_reporting(E_ERROR);
echo 4 / 0 . "<br>";

//error_reporting(~E_ALL); //Não exibir : ~
echo 4 / 0 . "<br>";

include "arquivo_inexistente.php";

function filtrarMensagem($errno, $errstring)
{
    $text = "include";
    return !!stripos(" $errstring", $text);
}