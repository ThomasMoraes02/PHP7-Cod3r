<div class="titulo">Membros Estáticos</div>

<?php 

class A 
{
    public $naoStatic = "Variável de instância";
    public static $static = "Variável estática de classe";

    public function mostrarA()
    {
        echo "Não estático: $this->naoStatic <br>";
        //echo "Estática: $this->static <br>"; Maneira errada se se acessae um membro estático
        echo "Estático:" . self::$static; //É acesada utilizando o self:: 
    }

    public static function mostrarStaticA() //Dentro de uma função estática só é possível membros estáticos
    {
      //  echo "Não estático: $this->naoStatic <br>"; Erro
      echo "<br>Estática: " . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA::mostrarStaticA(); // Não viáv el 
A::mostrarStaticA(); // Maneira adequada de se acessar uma função estática
