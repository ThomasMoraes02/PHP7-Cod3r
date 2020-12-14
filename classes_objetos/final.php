<div class="titulo">Modificador Final</div>

<?php 

abstract class Abstrata
{
    abstract public function metodo1();

    final public function metodo2()
    {
        echo "Não vou mudar!";
    }
}

class Classe extends Abstrata
{
    public function metodo1()
    {
        echo "Executando método 1 <br>";
    }

    //public function metodo2() //Não pode ser sobreescrita
    //{
    //    echo "Extendendo método 2 <br>";
    //}
}

$objeto = new Classe();
$objeto->metodo1();
$objeto->metodo2();

//Final class não podem ser herdadas!!!