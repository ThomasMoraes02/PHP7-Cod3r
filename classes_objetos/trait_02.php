<div class="titulo">Trait#02</div>

<?php 

trait Validacao
{
    public function validarString($string)
    {
        return isset($string) && $string !== "";
    }
}

trait validacaoMelhor
{
    public function validarString($string)
    {
        return isset($string) && trim($string);
    }
}

class Usuario
{
    use Validacao, validacaoMelhor {
        validacaoMelhor::validarString insteadOf Validacao;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(" "));