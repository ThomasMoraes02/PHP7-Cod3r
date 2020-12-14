<div class="titulo">Escrever Arquivo</div>

<?php 

//Abrir arquivo (será criado caso ainda não exista)
$arquivo = fopen("teste.txt", "w"); //w --> Modo de escrita

//Escrever no arquivo 
fwrite($arquivo, "Valor inicial \n");

//Segunda linha
$string = "Segunda linha \n";
fwrite($arquivo, $string);

//Fechar o arquivo
fclose($arquivo);

//Reescrevendo o arquivo
$arquivo = fopen("teste.txt", "w");
fwrite($arquivo, "Novo conteúdo\n");
fclose($arquivo);

$arquivo = fopen("teste.txt", "a"); //Modo de acrescentar novos conteúdos
fwrite($arquivo, "Novos valores\n");
fwrite($arquivo, "Adicionando novamente um conteúdo\n");
fclose($arquivo);

ini_set("display_errors", 1); //Habilitando aparição de erros

$arquivo = fopen("texte.txt", "x"); //Garantindo que o arquivo não exista, caso exista ocorrerá erro