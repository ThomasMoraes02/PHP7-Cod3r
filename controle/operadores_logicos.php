<div class="titulo">Operadores Lógicos</div>

<?php 

// AND ---> TODAS AS EXPRESSÕES DEVEM SER VERDADEIRAS PARA SER TRUE
// OR ---> PELO MENOS UMA DAS EXPRESSÕES PRECISAM SER VERDADEIRAS PARA SER TRUE

echo "<p>V ou F</p>";

var_dump(TRUE);

echo "<br>";

var_dump(!TRUE);

echo "<p>Tabela Verdade 'AND' (E)</p>";

echo "<br>" . var_dump(TRUE && TRUE);
echo "<br>" . var_dump(TRUE && FALSE);
echo "<br>" . var_dump(FALSE AND FALSE);
echo "<br>" . var_dump(FALSE AND FALSE);

echo "<br>";

echo "<p>Tabela Verdade 'OR' (OU)</p>";

echo "<br>" . var_dump(TRUE || TRUE);
echo "<br>" . var_dump(TRUE || FALSE);
echo "<br>" . var_dump(FALSE OR FALSE);
echo "<br>" . var_dump(FALSE || FALSE);


echo "<p>Tabela Verdade 'XOR' (OU Exclusivo)</p>";

echo "<br>" . var_dump(TRUE XOR TRUE);
echo "<br>" . var_dump(TRUE XOR FALSE);
echo "<br>" . var_dump(FALSE XOR FALSE);

echo "<p>Exemplo</p>";
$idade = 60;
$sexo = "F";

if($idade >= 60 && $sexo === "F") {
    echo "Pode se aposentar -> $sexo";
} else if ($idade >= 65 && $sexo === "M") {
    echo "Pode se aposentar também -> $sexo";
} else {
    echo "Não pode se aposentar";
}