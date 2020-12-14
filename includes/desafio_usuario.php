<?php 

require_once("desafio_pessoa.php");

class Usuario extends Pessoa
{
    public $email;

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function apresentar()
    {
        return "Nome: $this->nome <br> Idade: $this->idade <br> Email: $this->email";
    }
}