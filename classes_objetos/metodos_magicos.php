<div class="titulo">Métodos Mágicos</div>

<?php

class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        echo "Construtor invocado <br>";

        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function __destruct()
    {
        echo "E morreu <br>";
    }

    public function __toString()
    {
        return $this->nome . " tem " . $this->idade . " anos <br>";
    }

    public function apresentar()
    {
        echo $this . "<br>";
    }

    public function __get($atributo)
    {
        echo "Lendo um atributo não declarado: {$atributo}<br>";
    }
}

$pessoa = new Pessoa("Thomas", 20);
echo "<br>";
$pessoa->apresentar();
echo $pessoa;
echo "<br>";

echo $pessoa->nomeCompleto;