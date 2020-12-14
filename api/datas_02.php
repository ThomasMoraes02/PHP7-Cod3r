<div class="titulo">Datas #02</div>

<?php 

$formatoData1 = "D, d \d\e M \d\e Y";
$formatoData2 = "%A, %d de %B de %Y";
$formatoDatahora =  "%A, %d de %B de %Y - %H:%M:%S";

$agora = new DateTime();
//print_r($agora);

echo $agora->format($formatoData1);

echo "<br>";

setlocale(LC_TIME, "pt-BR");

echo "<br>";


//correto
echo strftime($formatoData2, $agora->getTimestamp());

echo "<br>";

$tz = new DateTimeZone("America/Sao_Paulo");
$agora = new DateTime(null, $tz);
echo $agora->format("d/M/Y H:i:s");