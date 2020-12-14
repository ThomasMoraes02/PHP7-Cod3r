<div class="titulo">Classe Abstrata</div>

<?php 

//Classe abstrata não pode ser instânciada!

abstract class Abstrata
{
    public abstract function metodo1();

    abstract protected function metodo2($parametro);
}

abstract class filhaAbstrata extends Abstrata
{
    public function metodo1()
    {
        echo "Executando método 1 <br>";
    }

    abstract public function metodo3();
}

class Concreta extends filhaAbstrata
{
    public function metodo1()
    {
        echo "Executando método 1 estendido <br>";
        parent::metodo1();
    }

    protected function metodo2($parametro)
    {
        echo "Executando método 2 com parâmetro $parametro<br>";
    }

    public function metodo3()
    {
        echo "Executando método 3 <br>";
        $this->metodo2("interno");
    }
}

$c = new Concreta();
$c->metodo1();
//$c->metodo2("externo"); É protegido
$c->metodo3();

echo "Fim";