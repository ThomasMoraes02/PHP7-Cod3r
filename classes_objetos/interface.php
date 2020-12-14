<div class="titulo">Interface</div>

<?php 

//Métodos de interface são publicas;
//Interface define funções obrigatórias para Classes
//Classes podem implementar diversas interfaces

interface Animal 
{
    public function respirar();
}

interface Canino
{
    public function latir();
}

class Cachorro implements Animal, Canino
{
    public function respirar()
    {
        echo "Irei usar oxigênio! <br>";
    }

    public function latir() 
    {
        echo "Au au <br>";
    }
}

$animal1 = new Cachorro();
$animal1->respirar();
$animal1->latir();

echo "Fim";