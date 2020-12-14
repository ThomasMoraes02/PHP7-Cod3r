<div class="titulo">Operações Aritméticas</div>

<?php 

echo 1 + 1, "<br>";

var_dump(1 + 1.1);
echo "<br>";

echo 10 - 2,"<br>";

echo 10 * 5,"<br>";

echo 7 /4,"<br>";

echo 1.75 * 4,"<br>";

echo intdiv(7,4),"<br>"; //O resultado será um inteiro

echo round(7/4),"<br>"; //Arredonda o resultado para o próximo inteiro

echo 7 % 4,"<br>"; //Resto da divisão "módulo"

echo 4 ** 2,"<br>";

//Precedência de operadores
// () => ** => / => * % => + -



echo "<p>Precedência:</p>";
echo "<p>() => ** => / => * % => + -</p>"."<br>";

echo 2 + 3 * 4;
echo "<br>";
echo (2+3) * 4;
echo "<br>";
echo 2+3 * 4 ** 2;
echo "<br>";
echo ((2+3) * 4) **2;   