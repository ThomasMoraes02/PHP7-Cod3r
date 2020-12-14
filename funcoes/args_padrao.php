<div class="titulo">Argumento Padrão</div>

<?php 

function saudacao($nome = "Senhor(a)", $sobrenome = "Cliente") {
    echo "Bem vindo, $nome $sobrenome <br>";
}

saudacao();

echo "<br>";

saudacao(NULL);

echo "<br>";

saudacao(NULL, NULL);

echo "<br>";

saudacao("Mestre", "Supremo");

echo "<br>";

function anotarPedido($comida, $bebida = "água") {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido("Pizza", "Coquinha gelada");