<div class="titulo">Ler Arquivo</div>

<?php

$arquivo = fopen("teste.txt", "r"); //modo de leitura
echo fread($arquivo, 10); //Ler os primeiros 10 bytes
echo "<br>";
echo fread($arquivo, 10); // Ler mais 10 bytes
fclose($arquivo);

echo "<br>";

$arquivo = fopen("teste.txt", "r");
echo fread($arquivo, filesize("teste.txt")); // Ler o arquivo todo
fclose($arquivo);
echo "<br>";
// Ou 

$arquivo = fopen("teste.txt", "r");
$tamanho = filesize("teste.txt");
echo $tamanho . "<br>";
echo fread($arquivo, $tamanho);
echo fclose($arquivo);
echo "<br>" . "<hr>";


//Ler linha a linha

$arquivo = fopen("teste.txt", "r");
echo fgets($arquivo) . "<br>";
echo fgets($arquivo) . "<br>";
echo fgets($arquivo) . "<br>";
var_dump(fgets($arquivo)) . "<br>"; //Retornará falso pois não existe
echo "<br><br><br>";

//Percorrer todas as linhas
$arquivo = fopen("teste.txt", "r");
while(!feof($arquivo)) {
    echo fgets($arquivo), "<br>";
}
fclose($arquivo);
echo "<br><br>";

//Percorrer todos os caracteres
$arquivo = fopen("teste.txt", "r");
while(!feof($arquivo)) {
    echo fgetc($arquivo), "<br>";
}
fclose($arquivo);
echo "<br><br>";

echo "<hr>";

//Ler e editar
$arquivo = fopen("teste.txt", "r+");
echo fgets($arquivo) . "<br>";
echo fgets($arquivo) . "<br>";
echo fgets($arquivo) . "<br>";
fclose($arquivo);