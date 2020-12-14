<div class="titulo">Tipo String</div>

<?php 

echo 'Eu sou um string';
echo "<br>";
var_dump("Eu também");
echo "<br>";

// Concatenação

echo "Nós também" . ' somos';
echo "<br>";
echo "Também aceito", " vírgulas" . " porém depende";

echo "<br>";
echo "'Teste'";
echo "<br>";
echo '"Teste"';
echo "<br>";

print("<br> Também existe a função 'print'");
print"<br> Também existe a função 'print' sem parênteses";


//Algumas funções

echo "<br>". strtoupper('maximizado'); // Todas as letras em maiúsculo
echo "<br>". strtolower('minimizado'); // Todas as letras em minúsculo
echo "<br>". ucfirst('só a primeira letra'); // Só a primeira letra
echo "<br>". ucwords("todas as palavras"); //Todas as palavras iniciam por maiúsculas
echo "<br>". strlen('Quantas letras?');  //Conta strings
echo "<br>". mb_strlen("Eu também", "utf-8"); //Faz o cálculo correto utilizando o enconding como parâmetro opcional
echo "<br>". substr("Só uma parte mesmo", 7, 6); // Pega parte de uma string
echo "<br>". str_replace("isso", "Aquilo", "Trocar isso"); // Troca uma string por outra dentro de uma string