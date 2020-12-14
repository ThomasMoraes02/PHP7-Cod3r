<?php namespace Contexto; ?>

<div class="titulo">Exemplo Básico</div>

<?php

echo __NAMESPACE__ . "<br>"; //Nome do namespace

const CONSTANTE1 = 123;

DEFINE("contexto\constante2", 234);
DEFINE(__NAMESPACE__."\constante3", 345);
DEFINE("outro_contexto\constante4", 456);

echo CONSTANTE1 . "<br>"; 
echo contante2 . "<br>"; 




