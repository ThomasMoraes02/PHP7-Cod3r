<div class="titulo">Herança</div>

<?php 

class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa criada!<br>";
    }

    public function __destruct()
    {
        echo "Pessoa diz Tchau!<br>";
    }

    public function apresentar()
    {
        echo "{$this->nome} , {$this->idade} anos <br>";
    }
}

class Usuario extends Pessoa
{
    public $login;

    public function __construct($nome, $idade, $login)
    {
        //$this->nome = $nome;
        //$this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo "Usuário criado <br>";
    }

    public function __destruct()
    {
        echo "Usuário diz Tchau! <br>";
        parent::__destruct();
    }

    public function apresentar()
    {
        echo "@{$this->login}:";

        //Chamando a função da classe pai
        parent::apresentar();
    }
}

$usuario = new Usuario("Sherlock Holmes", 30, "detective_holmes");
$usuario->apresentar();
unset($usuario);