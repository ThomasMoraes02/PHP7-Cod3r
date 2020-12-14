<div class="titulo">Visibilidade</div>

<?php 

class A 
{
    public $publico = "Publico";
    protected $protegido = "Protegido";
    private $privado = "Privado";

    public function mostrarA()
    {
        echo "Classe A) Publico = $this->publico <br>";
        echo "Classe A) Protegido = $this->protegido <br>";
        echo "Classe A) Privado = $this->privado <br>";
    }

    protected function vaiPorHeranca()
    {
        echo "Serei transmitido por herança";
    }

    private function naoMostrar()
    {
        echo "Não vou imprimir!<br>";
    }
}

$a = new A();
$a->mostrarA();

echo "<br>";

class B extends A
{
    public function mostrarB()
    {
        echo "Class B) Publico = $this->publico <br>";
        echo "Class B) Protegido = $this->protegido<br>";
        echo "Class B) Privado = $this->privado<br>";

        parent::vaiPorHeranca();
    }
}

$b = new B();
$b->mostrarB();   
echo "<br>";
$b->mostrarA();       // Funcionará pois herda classe Pai como função publica
$b->vaiPorHeranca(); // Por ser protegido será acessível apenas dentro da classe A