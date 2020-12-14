<?php namespace App; ?>

<div class="titulo">Sub-Namespaces</div>

<?php 

echo __NAMESPACE__ . "<br>"; //Namespace Atual

const constante = 123;

echo constante . "<br>";



echo "<br>";
namespace App\Principal;

echo __NAMESPACE__ . "<br>";

const constante = 234;

echo constante . "<br>";




echo "<br>";
namespace App\Principal\Especifico;

echo __NAMESPACE__ . "<br>";

const constante = 345;

echo constante . "<br>";
echo "<br>";

//Acessando a constante do namespace principal

echo "Namespace App: " . \App\constante . "<br>";

echo "Sub-namespace Principal: " . \App\Principal\constante . "<br>";

echo "Sub-namespace Especifico: " . \App\Principal\Especifico\constante . "<br>";