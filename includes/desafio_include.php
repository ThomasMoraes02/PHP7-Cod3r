<div class="titulo">Desafio Include</div>

<?php

require_once("desafio_usuario.php");

$usuario = new Usuario("Thomas", 20);
$usuario->setEmail("tho.vini7@gmail.com");
echo $usuario->apresentar();