<div class="titulo">Inserir#1</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro
  (nome, nascimento, email, site, filhos, salario)
  VALUES 
  (
    'Bolt',
    '2015-14-11',
    'bolt123@gmail.com',
    'https://igor123.sites.com.br',
    3,
    50000.50
  )";

$conexao = novaConexao();

$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();