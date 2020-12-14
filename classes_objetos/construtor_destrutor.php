<div class="titulo">Construtor & Destrutor</div>

<?php 

class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        echo "Nasceu <br>";

        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function __destruct()
    {
        echo "Morreu <br>";
    }

    public function apresentar()
    {
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}

$pessoa = new Pessoa("Thomas",20);
$pessoa->apresentar();

//$pessoa = new Pessoa(); Vai dar erro

unset($pessoa); // Chamando o destrutor

echo "<br>";

$novaPessoa = new Pessoa("Edgar", 44);
$novaPessoa->apresentar();
unset($novaPessoa);
