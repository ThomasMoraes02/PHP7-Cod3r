<div class="titulo">Tipo Booleano</div>

<?php 

echo TRUE; // TRUE é igual a 1
echo "<br>";
echo FALSE; // False é igual a vazio 

echo "<br>" . var_dump(FALSE);

echo "<br>" . var_dump("FALSE");

echo "<br>" . is_bool(false);

echo "<br>" . is_bool("false");

//Fazer reras de conversões

echo "<p>Regras:</p>";

echo "<br>" . var_dump((bool) 0); // Zero é igual a falso

echo "<br>" . var_dump((bool) -1);