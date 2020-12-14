<div class="titulo">Desafio Recursivo</div>


<?php 
/*

$array = [1,2,[3,4,5],6,[7,[8,9]]]]

*/

$array = [1,2,[3,4,5],6,[7,[8,9]]];


function imprimeArray($array, $nivel = ">") {
    foreach($array as $elemento) {
        if(is_array($elemento)) {
            imprimeArray($elemento,$nivel . $nivel[0]);
        } else {
            echo "$nivel $elemento<br>";
        }
    }
}

imprimeArray($array);