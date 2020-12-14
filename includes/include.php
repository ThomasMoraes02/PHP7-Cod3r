<div class="titulo">Include</div>

<?php 

echo "Executei essa linha do arquivo include <br>";

echo "<br>";

include("include_arquivo.php");
//include("include_arquivo.php"); //Vai dar erro se definir duas vezes o mesmo arquivo

echo "<br>";

echo soma(3,8) . "<br>";

echo "<br>";

echo "O conteudo da variável é:  $variavel <br>";