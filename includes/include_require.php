<div class="titulo">Include vs Require</div>

<?php 

echo "Usando include com arquivo inexistente...<br>";
//ini_set("display_errors", 1); //Gerar erros
include("include_inexistente.php");

echo "<br>";

echo "Usando require com arquivo inexistente...<br>";
require("include_inexistente.php");

echo "Não achou mesmo...";