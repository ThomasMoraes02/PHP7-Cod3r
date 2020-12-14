<div class="titulo">Desafio Erros</div>

<?php

//Código com erro

/*
interface Template
{
    function metodo1();

    public function metodo2($parametro);
}

abstract class ClasseAbstrata extends Template
{
    public function metodo3()
    {
        echo "Estou funcionando";
    }
}

class Classe implements ClasseAbstrata 
{
    function __construct($parametro)
    {

    }
}

$exemplo = Classe();
$exemplo.metodo3();

 */

//Código corrigido

interface Template
{
    function metodo1();

    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template
{   
    abstract function metodo3();
}

class Classe extends ClasseAbstrata 
{
    function __construct($parametro)
    {
     
    }

    public function metodo1() {}

    public function metodo2($parametro) {}

    public function metodo3()
    {
        echo "Estou funcionando";
    }
}

$exemplo = new Classe("parametro");
$exemplo->metodo3();