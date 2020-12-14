<div class="titulo">If Else</div>

<?php 

if(TRUE) {
    echo 'Serei impresso?';  
} 

echo "<br>";

if(TRUE) {
    echo "verdadeiro";
} else {
    echo "falso a" . "<br>";
    echo "falso b";
}

echo "<br>";


//Por padrão se não for definido a expressão ela será TRUE - Verdadeiro

if(false) {
    echo "PASSO A";
} else if (TRUE) {
    echo "PASSO B";
} else {
    echo "PASSO C";
}
 