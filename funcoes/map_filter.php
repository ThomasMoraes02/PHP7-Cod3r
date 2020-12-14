<div class="titulo">Map & Filter</div>

<?php 

//Modelo funcional

$notas = [5.8, 7.3, 9.8, 6,7];

$notasFinais1 = [];

foreach($notas as $nota) {
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);

echo "<br>";

//Modelo utilizando MAP

$notasFinais2 = array_map(round, $notas);

print_r($notasFinais2);


//Modelo funcional

$apenasAprovados1 = [];
foreach($notas as $nota) {
    if($nota >= 7) {
        $apenasAprovados1[] = $nota;
    }
}

echo "<br>";



function aprovados($nota) {
    return $nota >= 7;
}

echo "<br>";

//Modelo utilizando Filter

$apenasAprovados2 = array_filter($notas, aprovados);

print_r($apenasAprovados2);