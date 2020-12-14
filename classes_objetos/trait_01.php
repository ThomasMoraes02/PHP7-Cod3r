<div class="titulo">Traits#01</div>

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
    public function validarStringMelhor($string)
    {
        return isset($string) && trim($string);
    }
}

class Usuario
{
    use Validacao, validacaoMelhor;
}

$usuario = new Usuario();
var_dump($usuario->validarString(" "));