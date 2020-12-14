<div class="titulo">Include Função</div>

<?php 

echo "Carregando: include_funcao<br>";

function carregarArquivo()
{   
    include("include_arquivo.php");

    echo $variavel . "<br>";

    echo soma(5,10) . "<br>";
}

echo "<br>";
carregarArquivo();
echo "<br>";


echo "Novamente o arquivo include_funcao<br>";
echo soma(1,8) . "<br>";


