<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida
{
    public $peso;
}

class Arroz extends Comida
{
    
}

class Feijao extends Comida
{

}

class Sorvete extends Comida
{

}

class Pessoa
{   
    public $peso;

    public function __construct($peso)
    {
        $this->peso = $peso;
    }

    public function comer(Arroz $comida)
    {
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$ci->peso = 0.95;

$p = new Pessoa(65.45);
$p->comer($c1);

echo $p->peso;