<div class="titulo">Laço For</div>

<?php 

for($cont = 1; $cont < 5;$cont++) {
    echo "$cont <br>";   
}

for(; $cont <= 10; $cont++) {
    echo $cont . "<br>";
}

echo "<br>";

$array = ["Domingo",'Segunda', "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];

for($i = 0; $i < count($array); $i++) {
    echo "{$array[$i]}" . "<br>";
}
