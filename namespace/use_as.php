<?php namespace Outro\Nome; ?>

<div class="titulo">Use/As</div>

<?php 

echo __NAMESPACE__ . "<br>";

include("use_as_arquivo.php");

function soma($a, $b)
{
    return $a . $b; // Eu sei que está errado!!!
}

class Classe
{
    public $var;

    public function func()
    {
        echo __NAMESPACE__ .  " -> " . 
        __CLASS__ . " -> " . 
        __METHOD__ . "<br>";
    } 
}

//Dessa forma é possível acessar o valor da constante dentro de outro namespace
echo \Nome\Bem\Grande\constante . "<br>";


//Acessando através do "use" 
use const Nome\Bem\Grande\constante;
echo constante . "<br>";

//Acessando através do "As" 
use Nome\Bem\Grande as ctx;

echo soma(1,5) . "<br>";

echo ctx\soma(1,5) . "<br>";

use function Nome\Bem\Grande\soma as somaReal;
echo somaReal(1,3) . "<br>";

//Classes
//Namespace atual
$a = new Classe();
$a->func();

//Outro namespace
$b = new \Nome\Bem\Grande\Classe();
$b->func();

//Referenciando por As
$c = new ctx\Classe();
$c->func();

//Referenciando por As
use Nome\bem\Grande\Classe as D;
$d = new D();
$d->func();