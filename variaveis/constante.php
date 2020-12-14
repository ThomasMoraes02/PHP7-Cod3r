<div class="titulo">Constantes</div>

<?php 

//Definindo uma constante
define("TAXA_DE_JUROS", 5.9);

echo TAXA_DE_JUROS;

echo "<br>";

//erro pois novo valor não pode ser atribuido
//echo TAXA_DE_JUROS = 2.5;

//Utlizando-se de const também é possivel definir constantes
const NOVA_TAXA = 2.5;
echo NOVA_TAXA;

echo "<br>". PHP_VERSION;


//Informa a linha de código
echo "<br>". "Linha: " . __LINE__;

//Informa o arquivo

echo "<br>". __FILE__;

echo "<br>". __DIR__;