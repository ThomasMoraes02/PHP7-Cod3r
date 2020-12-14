<div class="titulo">Conversões</div>

<?php 

echo is_int(PHP_INT_MAX) . "<br>"; // 1 = verdadeiro => é inteiro

// Int para float

echo "<br>" . var_dump(PHP_INT_MAX + 1); // Transformou em float

echo "<br>" . var_dump(1 + 1.0); // Float

echo "<br>" . var_dump((float) 3); //Converteu um inteiro em float

// Float para int 

echo "<p>Float para Int</p>";

echo "<br>" . var_dump((int) 2.8); // Float para int

echo "<br>" . var_dump(intval(2.8,10)); // Valor + BASE a ser convertida = inteiro

echo "<br>" . var_dump((int) round(2.8)); //Arredondou para um valor inteiro

// operações com string

echo "<p>Strings</p>";

echo "<br>" . var_dump(3 + "2"); // Somou um int com string e será a soma  (+) é soma e não concatenação
echo "<br>" . var_dump("3"."2"); // Concatenou as duas strings
echo "<br>" . is_string("3" . 2); // 1 = verdadeiro
echo "<br>" . is_string("3" + 2); // NADA pois é falso
echo "<br>" . var_dump(1 + "cinco"); // Continua como 1
echo "<br>" . var_dump(1 + "5 cinco"); //Somou 1 + 5 
echo "<br>" . var_dump(1 + "2+5"); //Soma apenas o primeiro tipo int que aparecer
echo "<br>" . var_dump(1 + "3.2"); // Se torna um float